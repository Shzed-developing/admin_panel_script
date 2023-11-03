<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>ورود | UBold - قالب داشبورد مدیریت پاسخگو
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- App css -->
    <link href="/assets/css/config/modern/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="/assets/css/config/modern/app-rtl.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="/assets/css/config/modern/bootstrap-dark-rtl.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="/assets/css/config/modern/app-dark-rtl.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="/assets/css/icons-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/fontiran.css" rel="stylesheet" type="text/css" /></head>

<body class="loading authentication-bg authentication-bg-pattern">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card bg-pattern">

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <div class="auth-logo">
                                <a href="/" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="/assets/images/logo-dark.png" alt="" height="22">
                                            </span>
                                </a>

                                <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="/assets/images/logo-light.png" alt="" height="22">
                                            </span>
                                </a>
                            </div>
                            <p class="text-muted mb-4 mt-3">آدرس ایمیل و رمز عبور خود را برای دسترسی به پنل مدیریت وارد کنید.</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">آدرس ایمیل
                                </label>
                                <input name="email" class="form-control" type="email" id="emailaddress" required="" placeholder="آدرس ایمیل خود را وارد کنید">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">پسورد</label>
                                <div class="input-group input-group-merge">
                                    <input name="password" type="password" id="password" class="form-control" placeholder="پسورد خود را وارد کنید">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center d-grid">
                                <button class="btn btn-primary" type="submit">وارد شدن</button>
                            </div>

                        </form>

                        <div class="text-center">
                            <h5 class="mt-3 text-muted">ورود به سیستم با</h5>
                            <ul class="social-list list-inline mt-3 mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p> <a href="auth-recoverpw.html" class="text-white-50 ms-1">رمز عبور خود را فراموش کرده اید؟</a></p>
                        <p class="text-white-50">حساب ندارید؟<a href="auth-register.html" class="text-white ms-1"><b>ثبت نام</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->


<footer class="footer footer-alt text-white-50">
    2015 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a>
</footer>

<!-- Vendor js -->
<script src="/assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="/assets/js/app.min.js"></script>

</body>
</html>
