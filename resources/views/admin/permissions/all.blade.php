@component('admin.layouts.content', ['title' => 'دسترسی ها'])

    @slot('breadcrumb')
        <li class="breadcrumb-item active"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">دسترسی ها</li>

    @endslot

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">دسترسی ها</h4>
                    <p class="sub-header">
                        از این قسمت دسترسی های کاربران خود به وبسایت را مدیریت کنید.
                    </p>

                    <div class="mb-2">
                        <div class="row row-cols-sm-auto g-2 align-items-center">
                            <div class="col-12 text-sm-center">
                                @can('create-permission')
                                    <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary"><i class="mdi mdi-plus-circle me-2"></i> ایجاد دسترسی جدید</a>
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
                                <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted">نام دسترسی<span class="footable-sort-indicator"></span></th>
                                <th class="footable-visible footable-sortable">توضیح دسترسی<span class="footable-sort-indicator"></span></th>
                                <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">اقدامات</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($permissions as $permission)
                                <tr class="footable-even" style="">
                                    <td class="footable-visible"><span class="footable-toggle">{{ $permission->name }}</span></td>

                                    <td class="footable-visible">{{ $permission->label }}</td>

                                    <td class="text-center footable-visible footable-first-column d-flex">
                                        
                                        @can('delete-permission')
                                            <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-xs btn-icon">حذف</button>
                                            </form>
                                        @endcan 

                                        @can('edit-permission')
                                            <span> . </span>
                                            <a href="{{ route('admin.permissions.edit', $permission->id) }}" class="btn btn-primary btn-xs btn-icon">ویرایش</a>
                                        @endcan
                                        
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