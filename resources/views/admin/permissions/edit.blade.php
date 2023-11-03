@component('admin.layouts.content', ['title' => 'ویرایش دسترسی'])

    @slot('breadcrumb')
        <li class="breadcrumb-item active"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('admin.permissions.index') }}">همه دسترسی ها</a></li>
        <li class="breadcrumb-item active">ویرایش دسترسی</li>
    @endslot

    <div class="col-lg-6">
        @include('admin.layouts.errors')
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">فرم ویرایش دسترسی</h4>
                <br>
                <form role="form" class="parsley-examples" novalidate="" action="{{ route('admin.permissions.update', $permission->id) }}" method="POST">
                    @csrf
                    @method('PATCH')


                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-4 col-form-label">عنوان دسترسی<span class="text-danger">*</span></label>
                        <div class="col-7">
                            <input type="text" name="name" required="" class="form-control" placeholder="عنوان دسترسی" value="{{ old('name', $permission->name) }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-4 col-form-label">توضیح دسترسی<span class="text-danger">*</span></label>
                        <div class="col-7">
                            <input type="text" name="label" placeholder="توضیح دسترسی" required="" class="form-control" value="{{ old('label', $permission->label) }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-8 offset-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">ویرایش دسترسی</button>
                            <a href="{{ route('admin.permissions.index') }}" type="reset" class="btn btn-secondary waves-effect">لغو</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end card -->

    </div>

@endcomponent