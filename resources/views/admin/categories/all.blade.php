@component('admin.layouts.content', ['title' => 'لیست دسته بندی ها'])

    @slot('breadcrumb')
        <li class="breadcrumb-item active"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">لیست دسته بندی ها</li>

    @endslot

    @slot('head')
        <style>
            li.list-group-item > ul.list-group {
                margin-top: 10px;
            }
        </style>
    @endslot
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">دسته بندی ها</h4>
                    <p class="sub-header">
                        از این قسمت دسته بندی ها خود را مدیریت کنید.
                    </p>
                    <div class="mb-2">
                        <div class="row row-cols-sm-auto g-2 align-items-center">
                            <div class="col-12 text-sm-center">
                                @can('create-category')
                                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary"><i class="mdi mdi-plus-circle me-2"></i> ایجاد دسته جدید</a>
                                @endcan
                            </div>
                            <form action="">
                                <div class="col-12">
                                    <input type="text" name="search" placeholder="جستجو..." class="form-control float-right" value="{{ request('search') }}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>

@endcomponent
