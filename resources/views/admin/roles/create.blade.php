@component('admin.layouts.content', ['title' => 'ایجاد مقام'])

    @slot('breadcrumb')
        <li class="breadcrumb-item active"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('admin.roles.index') }}">همه مقام ها</a></li>
        <li class="breadcrumb-item active">ایجاد مقام</li>
    @endslot

    {{-- @slot('script')
        <script>
            $('#permissions').select2({
                'placeholder' : 'دسترسی مورد نظر را وارد کنید'
            })
        </script>
    @endslot --}}

    <div class="col-lg-6">
        @include('admin.layouts.errors')
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">فرم ایجاد مقام</h4>
                <br>
                <form role="form" class="parsley-examples" novalidate="" action="{{ route('admin.roles.store') }}" method="POST">
                    @csrf

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-4 col-form-label">عنوان مقام<span class="text-danger">*</span></label>
                        <div class="col-7">
                            <input type="text" name="name" required="" class="form-control" placeholder="عنوان مقام" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-4 col-form-label">توضیح مقام<span class="text-danger">*</span></label>
                        <div class="col-7">
                            <input type="text" name="label" placeholder="توضیح مقام" required="" class="form-control" value="{{ old('label') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-4 col-form-label">دسترسی ها<span class="text-danger">*</span></label>
                        <select class="form-control" name="permissions[]" id="permissions" multiple>
                            @foreach (App\Models\Permission::all() as $permission)
                                <option value="{{ $permission->id }}">{{ $permission->name }} - {{ $permission->label }}</option>
                            @endforeach
                        </select>
                    </div>

                    <br>

                    <div class="row mb-3">
                        <div class="col-8 offset-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">ثبت مقام</button>
                            <a href="{{ route('admin.roles.index') }}" type="reset" class="btn btn-secondary waves-effect">لغو</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        
        <!-- end card -->

    </div>

@endcomponent