@component('admin.layouts.content', ['title' => 'ویرایش کاربر'])

    @slot('breadcrumb')
        <li class="breadcrumb-item active"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('admin.users.index') }}">لیست کاربران</a></li>
        <li class="breadcrumb-item active">ویرایش کاربر</li>
    @endslot

    <div class="col-lg-6">
        @include('admin.layouts.errors')
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">فرم ویرایش کاربر</h4>
                <p class="text-muted font-14">
                    مشخصات مورد نیاز کاربر را وارد کنید تا از این بخش بتوانید یک کاربر جدید بسازید
                </p>

                <form role="form" class="parsley-examples" novalidate="" action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-4 col-form-label">نام کاربری<span class="text-danger">*</span></label>
                        <div class="col-7">
                            <input type="text" name="name" class="form-control" placeholder="نام کاربری را وارد کنید" value="{{ $user->name }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-4 col-form-label">ایمیل<span class="text-danger">*</span></label>
                        <div class="col-7">
                            <input type="email" name="email" placeholder="ایمیل را وارد کنید" class="form-control" value="{{ $user->email }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="hori-pass1" class="col-4 col-form-label">پسوورد<span class="text-danger">*</span></label>
                        <div class="col-7">
                            <input type="password" name="password" placeholder="پسوورد" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="hori-pass2" class="col-4 col-form-label">تایید پسورد<span class="text-danger">*</span></label>
                        <div class="col-7">
                            <input type="password" name="password_confirmation" placeholder="تایید پسوورد" class="form-control">
                        </div>
                    </div>

                    @if ( ! $user->hasVerifiedEmail() )
                        <div class="form-check">
                            <input type="checkbox" name="verify" class="form-check-input" id="verify">
                            <label class="form-check-label" for="verify">اکانت فعال باشد</label>
                        </div>
                    @endif

                    <div class="row mb-3">
                        <div class="col-8 offset-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">ویرایش کاربر</button>
                            <a href="{{ route('admin.users.index') }}" type="reset" class="btn btn-secondary waves-effect">لغو</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end card -->

    </div>

@endcomponent