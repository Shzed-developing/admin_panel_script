@component('admin.layouts.content', ['title' => 'ایجاد محصول'])

    @slot('breadcrumb')
        <li class="breadcrumb-item active"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('admin.products.index') }}">لیست محصولان</a></li>
        <li class="breadcrumb-item active">ایجاد محصول</li>
    @endslot

    <div class="col-lg-6">
        @include('admin.layouts.errors')
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">فرم ایجاد محصول</h4>
                <p class="text-muted font-14">
                    مشخصات مورد نیاز محصول را وارد کنید تا از این بخش بتوانید یک محصول جدید بسازید
                </p>

                <form role="form" class="parsley-examples" novalidate="" action="{{ route('admin.products.store') }}" method="POST">
                    @csrf

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-4 col-form-label">نام محصول<span class="text-danger">*</span></label>
                        <div class="col-7">
                            <input type="text" name="title" required="" class="form-control" placeholder="نام محصول" value="{{ old('title') }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-4 col-form-label">توضیحات<span class="text-danger">*</span></label>
                        <div class="col-7">
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="hori-pass2" class="col-4 col-form-label">قیمت<span class="text-danger">*</span></label>
                        <div class="col-7">
                            <input type="number" name="price" required="" placeholder="قیمت را وارد کنید" value="{{ old('price') }}" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="hori-pass1" class="col-4 col-form-label">موجودی<span class="text-danger">*</span></label>
                        <div class="col-7">
                            <input type="number" name="inventory" placeholder="موجودی را وارد کنید" value="{{ old('inventory') }}" required="" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-8 offset-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">ثبت محصول</button>
                            <a href="{{ route('admin.products.index') }}" type="reset" class="btn btn-secondary waves-effect">لغو</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end card -->

    </div>

@endcomponent