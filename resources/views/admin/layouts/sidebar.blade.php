<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>من حساب</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>تنظیمات</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>صفحه قفل</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>خروج</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li>
                    <a href="{{ route('admin.') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> پنل مدیریت </span>
                    </a>

                </li>

                @can('show-users')

                    <li>
                        <a href="#users" data-bs-toggle="collapse">

                            <i class="mdi mdi-account-multiple-outline"></i>
                            <span> کاربران </span>

                        </a>

                        <div class="collapse" id="users">

                            <ul class="nav-second-level">

                                @can('show-users')
                                    <li>
                                        <a href="{{ route('admin.users.index') }}">لیست کاربران</a>
                                    </li>
                                @endcan

                                @can('create-user')
                                    <li>
                                        <a href="{{ route('admin.users.create') }}">ایجاد کاربر</a>
                                    </li>
                                @endcan

                            </ul>

                        </div>

                    </li>

                @endcan

                @canany(['show-permissions', 'show-roles'])

                    <li>

                        <a href="#permissions" data-bs-toggle="collapse">

                            <i class="fe-unlock"></i>
                            <span> بخش اجازه دسترسی </span>

                        </a>

                        <div class="collapse" id="permissions">

                            <ul class="nav-second-level">

                                @can('show-permissions')

                                    <li>
                                        <a href="{{ route('admin.permissions.index') }}">همه دسترسی ها</a>
                                    </li>

                                @endcan

                                @can('create-permission')

                                    <li>
                                        <a href="{{ route('admin.permissions.create') }}">ایجاد دسترسی</a>
                                    </li>

                                @endcan

                                @can('show-roles')

                                    <li>
                                        <a href="{{ route('admin.roles.index') }}">همه مقام ها</a>
                                    </li>

                                @endcan

                                @can('create-role')
                                    <li>
                                        <a href="{{ route('admin.roles.create') }}">ایجاد مقام</a>
                                    </li>
                                @endcan

                            </ul>

                        </div>

                    </li>

                @endcanany



                @can('show-products')

                    <li>
                        <a href="#products" data-bs-toggle="collapse">

                            <i class="mdi mdi-account-multiple-outline"></i>
                            <span> محصولات </span>

                        </a>

                        <div class="collapse" id="products">

                            <ul class="nav-second-level">

                                @can('show-products')
                                    <li>
                                        <a href="{{ route('admin.products.index') }}">لیست محصولات</a>
                                    </li>
                                @endcan

                                @can('create-product')
                                    <li>
                                        <a href="{{ route('admin.products.create') }}">ایجاد محصول جدید</a>
                                    </li>
                                @endcan

                            </ul>

                        </div>

                    </li>

                @endcan

                @can('show-comments')

                    <li>
                        <a href="#comments" data-bs-toggle="collapse">

                            <i class="mdi mdi-account-multiple-outline"></i>
                            <span> نظرات </span>

                        </a>

                        <div class="collapse" id="comments">

                            <ul class="nav-second-level">

                                @can('show-comments')
                                    <li>
                                        <a href="{{ route('admin.comments.index') }}">لیست نظرات</a>
                                    </li>
                                @endcan

                                @can('show-unapprovedcomments')
                                    <li>
                                        <a href="{{ route('admin.comments.unapproved') }}">لیست نظرات تایید نشده</a>
                                    </li>
                                @endcan

                            </ul>

                        </div>

                    </li>

                @endcan

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
