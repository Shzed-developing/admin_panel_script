@component('admin.layouts.content', ['title' => 'لیست نظرات تایید نشده'])

    @slot('breadcrumb')
        <li class="breadcrumb-item active"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">لیست نظرات تایید نشده</li>

    @endslot

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">نظرات تایید نشده</h4>
                    <p class="sub-header">
                        از این قسمت نظرات تایید نشده خود را مدیریت کنید.
                    </p>

                    <div class="mb-2">
                        <div class="row row-cols-sm-auto g-2 align-items-center">
                            <div class="col-12 text-sm-center">

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
                                <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted">آیدی نظر<span class="footable-sort-indicator"></span></th>
                                <th class="footable-visible footable-sortable">نام کاربر<span class="footable-sort-indicator"></span></th>
                                <th class="footable-visible footable-sortable">متن نظر<span class="footable-sort-indicator"></span></th>
                                <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">اقدامات</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($comments as $comment)
                                <tr class="footable-even" style="">
                                    <td class="footable-visible"><span class="footable-toggle">{{ $comment->id }}</span></td>
                                    <td class="footable-visible">{{ $comment->user->name }}</td>
                                    <td class="footable-visible">{{ $comment->comment }}</td>


                                    <td class="text-center footable-visible footable-first-column d-flex">

                                        @can('delete-comment')
                                            <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-xs btn-icon">حذف</button>
                                            </form>
                                        @endcan

                                            @can('delete-comment')
                                                <span>.</span>
                                                <form action="{{ route('admin.comments.update', $comment->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-success btn-xs btn-icon">تایید</button>
                                                </form>
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
