@component('admin.layouts.content', ['title' => 'ثبت دسترسی'])

    @slot('breadcrumb')
        <li class="breadcrumb-item active"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('admin.users.index') }}">لیست کاربران</a></li>
        <li class="breadcrumb-item active">ثبت دسترسی</li>
    @endslot

    {{-- @slot('script')
        <script>
            $('#roles').select2({
                'placeholder' : 'مقام مورد نظر را وارد کنید'
             })
            $('#permissions').select2({
                'placeholder' : 'دسترسی مورد نظر را وارد کنید'
             })
        </script>
    @endslot --}}

    <div class="col-lg-6">
        @include('admin.layouts.errors')
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">ثبت دسترسی</h4>
                <br>
                <form role="form" class="parsley-examples" novalidate="" action="{{ route('admin.users.permissions.store', $user->id) }}" method="POST">
                    @csrf

                    <div class="form-group">

                        <label for="inputEmail3" class="col-4 col-form-label">مقام ها<span class="text-danger">*</span></label>
                        <select class="form-control" name="roles[]" id="roles" multiple>
                            @foreach (App\Models\Role::all() as $role)
                                <option value="{{ $role->id }}" {{ in_array($role->id, $user->roles->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $role->name }} - {{ $role->label }}</option>
                            @endforeach
                        </select>
                        
                    </div>

                    <div class="form-group">

                        <label for="inputEmail3" class="col-4 col-form-label">دسترسی ها<span class="text-danger">*</span></label>
                        <select class="form-control" name="permissions[]" id="permissions" multiple>
                            @foreach (App\Models\Permission::all() as $permission)
                                <option value="{{ $permission->id }}" {{ in_array($permission->id, $user->permissions->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $permission->name }} - {{ $permission->label }}</option>
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