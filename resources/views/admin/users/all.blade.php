@component('admin.layouts.content', ['title' => 'لیست کاربران'])

    @slot('breadcrumb')
        <li class="breadcrumb-item active"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">لیست کاربران</li>

    @endslot

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">کاربران</h4>
                    <p class="sub-header">
                        از این قسمت کاربران خود را مدیریت کنید.
                    </p>

                    <div class="mb-2">
                        <div class="row row-cols-sm-auto g-2 align-items-center">
                            <div class="col-12 text-sm-center">

                                @can('create-user')
                                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary"><i class="mdi mdi-plus-circle me-2"></i> ایجاد کاربر جدید</a>
                                @endcan

                                @can('show-staff-users')
                                    <a href="{{ request()->fullUrlWithQuery(['admin' => 1]) }}" class="btn btn-warning">کاربران مدیر</a>      
                                @endcan
                            </div>
                            <form action="">
                                <div class="col-12">
                                    <input type="text" name="search" placeholder="جستجو..." class="form-control float-right" value="{{ request('search') }}">
                                </div>
                            </form>
                        </div>
                    </div>

                    <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle default footable-loaded footable" data-page-size="7">
                        <thead>
                            <tr>
                                <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted">آیدی کاربر<span class="footable-sort-indicator"></span></th>
                                <th class="footable-visible footable-sortable">نام کاربر<span class="footable-sort-indicator"></span></th>
                                <th class="footable-visible footable-sortable">ایمیل<span class="footable-sort-indicator"></span></th>
                                <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">وضعیت ایمیل<span class="footable-sort-indicator"></span></th>
                                <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">اقدامات</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($users as $user)
                                <tr class="footable-even" style="">
                                    <td class="footable-visible"><span class="footable-toggle">{{ $user->id }}</span></td>
                                    <td class="footable-visible">{{ $user->name }}</td>
                                    <td class="footable-visible">{{ $user->email }}</td>

                                    @if ($user->email_veified_at)
                                        <td class="footable-visible footable-last-column"><span class="badge label-table bg-success">فعال</span></td>
                                    @else
                                        <td class="footable-visible footable-last-column"><span class="badge label-table bg-danger">غیرفعال</span></td>
                                    @endif

                                    
                                    <td class="text-center footable-visible footable-first-column d-flex">
                                        
                                        @can('delete-user')

                                            <form action="{{ route('admin.users.destroy', ['user' => $user->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')


                                                <button type="submit" class="btn btn-danger btn-xs btn-icon">حذف</button>
                                            </form> 

                                        @endcan 

                                            
                                        @can('edit-user')
                                        <span> . </span>
                                            <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" class="btn btn-primary btn-xs btn-icon">ویرایش</a>
                                        @endcan

                                        @if ($user->isStaffUser())

                                            @can('staff-user-permissions')
                                                <span> . </span>
                                                <a href="{{ route('admin.users.permissions', $user->id) }}" class="btn btn-warning btn-xs btn-icon">دسترسی ها</a>
                                            @endcan

                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>

@endcomponent