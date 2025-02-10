<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>بورداش - قالب داشبرد ادمین</title>

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="{{asset('assets/media/image/favicon.png')}}"/> --}}
    <link rel="shortcut icon" href="{{ asset('assets/media/image/favicon.png') }}" />

    <!-- Plugin styles -->
    {{-- <link rel="stylesheet" href="{{asset('vendors/bundle.css')}}" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('vendors/bundle.css') }}" type="text/css">

    <!-- quill -->
    <link href="{{ asset('vendors/quill/quill.snow.css') }}" rel="stylesheet" type="text/css">

    <!-- Tagsinput -->
    <link rel="stylesheet" href="{{ asset('vendors/tagsinput/bootstrap-tagsinput.css') }}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}" type="text/css">
</head>

<body class="stretch-layout navigation-toggle-one">

    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->




    <!-- begin::main -->
    <div id="main">

        <!-- begin::navigation -->
        <div class="navigation">

            <div class="navigation-menu-tab">
                <div>
                    <div class="navigation-menu-tab-header" data-toggle="tooltip" title="رکسانا رادمهر"
                        data-placement="right">
                        <a href="{{ asset('#') }}" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                            <figure class="avatar avatar-sm">
                                <img src="{{ asset('assets/media/image/user/women_avatar1.jpg') }}"
                                    class="rounded-circle" alt="avatar">
                            </figure>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left dropdown-menu-big">
                            <div class="p-3 text-center" data-backround-image="assets/media/image/image1.jpg')}}">
                                <figure class="avatar mb-3">
                                    <img src="{{ asset('assets/media/image/user/women_avatar1.jpg') }}"
                                        class="rounded-circle" alt="image">
                                </figure>
                                <h6 class="d-flex align-items-center justify-content-center">
                                    رکسانا رادمهر
                                    <a href="{{ asset('#') }}" class="btn btn-primary btn-sm ml-2"
                                        data-toggle="tooltip" title="ویرایش پروفایل">
                                        <i data-feather="edit-2"></i>
                                    </a>
                                </h6>
                                <small>شارژ: <strong>1000 تومان</strong></small>
                            </div>
                            <div class="dropdown-menu-body">
                                <div class="border-bottom p-4">
                                    <h6 class="text-uppercase font-size-11 d-flex justify-content-between">
                                        حافظه
                                        <span>%25</span>
                                    </h6>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 35%;"
                                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="list-group list-group-flush">
                                    <a href="{{ asset('#') }}" class="list-group-item">پروفایل</a>
                                    <a href="{{ asset('#') }}" class="list-group-item d-flex">
                                        دنبال‌کنندگان<span class="text-muted ml-auto">214</span>
                                    </a>
                                    <a href="{{ asset('#') }}" class="list-group-item d-flex">
                                        صندوق ورودی <span class="text-muted ml-auto">18</span>
                                    </a>
                                    <a href="{{ asset('#') }}" class="list-group-item"
                                        data-sidebar-target="#settings">صورتحساب</a>
                                    <a href="{{ asset('#') }}" class="list-group-item"
                                        data-sidebar-target="#settings">راهنمایی?</a>
                                    <a href="{{ asset('#') }}" class="list-group-item text-danger"
                                        data-sidebar-target="#settings">خروج</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-grow-1">
                    <ul>
                        <li>
                            <a href="{{ asset('#') }}" data-toggle="tooltip" data-placement="right" title="داشبردها"
                                data-nav-target="#dashboards">
                                <i data-feather="bar-chart-2"></i>
                            </a>
                        </li>
                        <li>
                            <a class="active" href="{{ asset('#') }}" data-toggle="tooltip" data-placement="right"
                                title="اپ ها" data-nav-target="#apps">
                                <i data-feather="command"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('#') }}" data-toggle="tooltip" data-placement="right"
                                title="عناصر رابط کاربری" data-nav-target="#elements">
                                <i data-feather="layers"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('#') }}" data-toggle="tooltip" data-placement="right"
                                title="صفحات" data-nav-target="#pages">
                                <i data-feather="copy"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li>
                            <a href="{{ asset('#') }}" data-toggle="tooltip" data-placement="right"
                                title="تنظیمات">
                                <i data-feather="settings"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset('login.html') }}" data-toggle="tooltip" data-placement="right"
                                title="خروج">
                                <i data-feather="log-out"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- begin::navigation menu -->
            <div class="navigation-menu-body">

                <!-- begin::navigation-logo -->
                <div>
                    <div id="navigation-logo">
                        <a href="{{ asset('index.html') }}">
                            <img class="logo" src="{{ asset('assets/media/image/logo-F.png') }}" alt="logo">
                            <img class="logo-light" src="{{ asset('assets/media/image/logo-light.png') }}"
                                alt="light logo">
                        </a>
                    </div>
                </div>
                <!-- end::navigation-logo -->

                <div class="navigation-menu-group">

                    <div id="dashboards">
                        <ul>
                            <li class="navigation-divider">داشبردها</li>
                            <li><a href="{{ asset('index.html') }}">CRM سیستم</a></li>
                            <li><a href="{{ asset('dashboard-two.html') }}">ایکامرس<span
                                        class="badge badge-danger">2</span></a></li>
                            <li><a href="{{ asset('dashboard-three.html') }}">آنالیستیک</a></li>
                            <li><a href="{{ asset('dashboard-four.html') }}">مدیریت پروژه</a></li>
                            <li><a href="{{ asset('dashboard-five.html') }}">مدیریت هلپ‌دسک</a></li>
                            <li class="navigation-divider">مخاطبان</li>
                            <li>
                                <div class="list-group list-group-flush">
                                    <a href="{{ asset('#') }}" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="{{ asset('assets/media/image/user/man_avatar1.jpg') }}"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>علی احمدی</span>
                                    </a>
                                    <a href="{{ asset('#') }}" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="{{ asset('assets/media/image/user/women_avatar2.jpg') }}"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>الهه جم </span>
                                    </a>
                                    <a href="{{ asset('#') }}" class="list-group-item d-flex align-items-center">
                                        <div>
                                            <div class="avatar avatar-sm m-r-10">
                                                <img src="{{ asset('assets/media/image/user/women_avatar4.jpg') }}"
                                                    class="rounded-circle" alt="image">
                                            </div>
                                        </div>
                                        <span>کیمیا فروزش</span>
                                    </a>
                                </div>
                            </li>
                            <li class="navigation-divider">دنبال‌کنندگان</li>
                            <li>
                                <div class="avatar-group ml-4">
                                    <a href="{{ asset('#') }}" class="avatar">
                                        <span class="avatar-title bg-success rounded-circle">آ</span>
                                    </a>
                                    <a href="{{ asset('#') }}" class="avatar">
                                        <img src="{{ asset('assets/media/image/user/women_avatar5.jpg') }}"
                                            class="rounded-circle" alt="avatar">
                                    </a>
                                    <a href="{{ asset('#') }}" class="avatar">
                                        <img src="{{ asset('assets/media/image/user/women_avatar2.jpg') }}"
                                            class="rounded-circle" alt="avatar">
                                    </a>
                                    <a href="{{ asset('#') }}" class="avatar">
                                        <span class="avatar-title bg-info rounded-circle">س</span>
                                    </a>
                                    <a href="{{ asset('#') }}" class="avatar">
                                        <span class="avatar-title bg-dark rounded-circle">+30</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="open" id="apps">
                        <ul>
                            <li class="navigation-divider">اپ های وب</li>
                            <li>
                                <a href="{{ asset('chat.html') }}">
                                    <span>چت</span>
                                    <span class="badge badge-danger">5</span>
                                </a>
                            </li>
                            <li>
                                <a class="active" href="{{ asset('inbox.html') }}">
                                    <span>ایمیل</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('app-todo.html') }}">
                                    <span>تو دو</span>
                                    <span class="badge badge-warning">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('file-manager.html') }}">
                                    <span>فایل منیجر</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('calendar.html') }}">
                                    <span>تقویم</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="elements">
                        <ul>
                            <li class="navigation-divider">عناصر رابط کاربری</li>
                            <li>
                                <a href="{{ asset('#') }}">پایه</a>
                                <ul>
                                    <li><a href="{{ asset('alerts.html') }}">پیام</a></li>
                                    <li><a href="{{ asset('accordion.html') }}">آکاردیون</a></li>
                                    <li><a href="{{ asset('buttons.html') }}">دکمه‌ها</a></li>
                                    <li><a href="{{ asset('dropdown.html') }}">دراپ‌داون</a></li>
                                    <li><a href="{{ asset('list-group.html') }}">گروه لیستی</a></li>
                                    <li><a href="{{ asset('pagination.html') }}">صفحه‌بندی</a></li>
                                    <li><a href="{{ asset('typography.html') }}">تایپوگرافی</a></li>
                                    <li><a href="{{ asset('media-object.html') }}">مدیا ابجکت</a></li>
                                    <li><a href="{{ asset('progress.html') }}">وضعیت پیشرفت</a></li>
                                    <li><a href="{{ asset('modal.html') }}"> مودال </a></li>
                                    <li><a href="{{ asset('spinners.html') }}">اسنیپرز</a></li>
                                    <li><a href="{{ asset('navs.html') }}">نویگیشن‌ها</a></li>
                                    <li><a href="{{ asset('tab.html') }}">تب</a></li>
                                    <li><a href="{{ asset('tooltip.html') }}">تولتیپ</a></li>
                                    <li><a href="{{ asset('popovers.html') }}">پاپ‌اور ها</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ asset('#') }}">کارت‌ها</a>
                                <ul>
                                    <li><a href="{{ asset('basic-cards.html') }}">کارت‌های پایه </a></li>
                                    <li><a href="{{ asset('image-cards.html') }}">کارت‌های تصویردار</a></li>
                                    <li><a href="{{ asset('card-scroll.html') }}">کارت‌ همراه با اسکرول</a></li>
                                    <li><a href="{{ asset('other-cards.html') }}">کارت‌های دیگر</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ asset('avatar.html') }}">آواتور</a></li>
                            <li><a href="{{ asset('icons.html') }}">ایکن‌ها</a></li>
                            <li><a href="{{ asset('colors.html') }}">رنگ‌ها</a></li>
                            <li>
                                <a href="{{ asset('#') }}">پلاگین</a>
                                <ul>
                                    <li><a href="{{ asset('sweet-alert.html') }}">سوییت الرت</a></li>
                                    <li><a href="{{ asset('lightbox.html') }}">لایت باکس</a></li>
                                    <li><a href="{{ asset('toast.html') }}">توست</a></li>
                                    <li><a href="{{ asset('tour.html') }}">تور</a></li>
                                    <li><a href="{{ asset('slick-slide.html') }}">اسلیک اسلاید</a></li>
                                    <li><a href="{{ asset('nestable.html') }}"> نست‌ایبل </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ asset('#') }}">فرمها</a>
                                <ul>
                                    <li><a href="{{ asset('basic-form.html') }}">چینش فرم</a></li>
                                    <li><a href="{{ asset('custom-form.html') }}">فرم سفارشی</a></li>
                                    <li><a href="{{ asset('advanced-form.html') }}">فرم پیشرفته</a></li>
                                    <li><a href="{{ asset('form-validation.html') }}">اعتبارسنجی</a></li>
                                    <li><a href="{{ asset('form-wizard.html') }}">ویزارد</a></li>
                                    <li><a href="{{ asset('file-upload.html') }}">آپلود فایل</a></li>
                                    <li><a href="{{ asset('datepicker.html') }}">انتخابگر تاریخ</a></li>
                                    <li><a href="{{ asset('timepicker.html') }}">انتخابگر زمان</a></li>
                                    <li><a href="{{ asset('colorpicker.html') }}">انتخابگر رنگ</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ asset('#') }}">جدول‌ها</a>
                                <ul>
                                    <li><a href="{{ asset('tables.html') }}">جدول پایه</a></li>
                                    <li><a href="{{ asset('data-table.html') }}">جدول داده‌ای</a></li>
                                    <li><a href="{{ asset('responsive-table.html') }}">جدول رسپانسیو</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ asset('#') }}">نمودارها</a>
                                <ul>
                                    <li><a href="{{ asset('apexchart.html') }}">اپکس</a></li>
                                    <li><a href="{{ asset('chartjs.html') }}">چارت جی‌اس</a></li>
                                    <li><a href="{{ asset('justgage.html') }}">چارت جاستگیگ</a></li>
                                    <li><a href="{{ asset('morsis.html') }}">چارت مورسیس</a></li>
                                    <li><a href="{{ asset('peity.html') }}">چارت پتی</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ asset('#') }}">نقشه</a>
                                <ul>
                                    <li><a href="{{ asset('google-map.html') }}">گوگل</a></li>
                                    <li><a href="{{ asset('vector-map.html') }}">وکتور</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="pages">
                        <ul>
                            <li class="navigation-divider">صفحات</li>
                            <li><a href="{{ asset('login.html') }}">ورود</a></li>
                            <li><a href="{{ asset('register.html') }}">ثبت‌نام</a></li>
                            <li><a href="{{ asset('recover-password.html') }}">بازگردانی رمزعبور</a></li>
                            <li><a href="{{ asset('lock-screen.html') }}">قفل صفحه</a></li>
                            <li><a href="{{ asset('profile.html') }}">پروفایل</a></li>
                            <li><a href="{{ asset('timeline.html') }}">تایملاین</a></li>
                            <li><a href="{{ asset('invoice.html') }}">صورت‌حساب</a></li>

                            <li><a href="{{ asset('pricing-table.html') }}">جدول قیمت</a></li>
                            <li><a href="{{ asset('search-result.html') }}">نتایج جستجو</a></li>
                            <li>
                                <a href="{{ asset('#') }}">صفحات خطا</a>
                                <ul>
                                    <li><a href="{{ asset('404.html') }}">404</a></li>
                                    <li><a href="{{ asset('404-2.html') }}">404ورژن2</a></li>
                                    <li><a href="{{ asset('503.html') }}">503</a></li>
                                    <li><a href="{{ asset('mean-at-work.html') }}">در حال ساخت</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ asset('blank-page.html') }}">صفحه شروع</a></li>
                            <li>
                                <a href="{{ asset('#') }}">قالب ایمیل</a>
                                <ul>
                                    <li><a href="{{ asset('email-template-basic.html') }}">پایه</a></li>
                                    <li><a href="{{ asset('email-template-alert.html') }}">پیام</a></li>
                                    <li><a href="{{ asset('email-template-billing.html') }}">صورتحساب</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ asset('#') }}">سطح منو</a>
                                <ul>
                                    <li>
                                        <a href="{{ asset('#') }}">سطح منو</a>
                                        <ul>
                                            <li>
                                                <a href="{{ asset('#') }}">سطح منو</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end::navigation menu -->

        </div>
        <!-- end::navigation -->




        <!-- begin::main-content -->
        <div class="main-content">

            <div class="container-fluid h-100">

                <div class="row app-block">
                    @yield('send_ticket')
                    @yield('listOfTicket')

                </div>

            </div>

            <!-- begin::footer -->
            <footer>
                <div class="container-fluid">
                    <div>© 1399 | قالب مدیریت بورداش ورژن 1.0.0 ارایه از <a href="">AFARIDTEAM</a></div>

                </div>
            </footer>
            <!-- end::footer -->

        </div>
        <!-- end::main-content -->

    </div>
    <!-- end::main -->

    @yield('model_send_ticket')



    <!-- Plugin scripts -->
    <script src="{{ asset('vendors/bundle.js') }}"></script>

    <!-- Tagsinput -->
    <script src="{{ asset('vendors/tagsinput/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('assets/js/examples/tagsinput.js') }}"></script>

    <!-- quill -->
    <script src="{{ asset('vendors/quill/quill.js') }}"></script>

    <!-- App scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <script>

        new Quill('.compose-quill-editor', {
            modules: {
                toolbar: ".compose-quill-toolbar"
            },
            placeholder: "اینجا بنویسید...",
            theme: "snow"
        });

        new Quill('.reply-email-quill-editor', {
            modules: {
                toolbar: ".reply-email-quill-toolbar"
            },
            placeholder: "اینجا بنویسید...",
            theme: "snow"
        });

        $(function() {
            $(document).on('click', '.app-block .app-content .app-action .action-left input[type="checkbox"]',
                function() {
                    $('.app-lists ul li input[type="checkbox"]').prop('checked', $(this).prop('checked'));
                    if ($(this).prop('checked')) {
                        $('.app-lists ul li input[type="checkbox"]').closest('li').addClass('active');
                    } else {
                        $('.app-lists ul li input[type="checkbox"]').closest('li').removeClass('active');
                    }
                });

            $(document).on('click', '.app-lists ul li input[type="checkbox"]', function() {
                if ($(this).prop('checked')) {
                    $(this).closest('li').addClass('active');
                } else {
                    $(this).closest('li').removeClass('active');
                }
            });

            $(document).on('click',
                '.app-block .app-content .app-content-body .app-lists ul.list-group li.list-group-item',
                function(e) {
                    if (!$(e.target).is('.custom-control, .custom-control *, a, a *')) {
                        $('.app-detail').addClass('show').one(
                            'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
                            function() {
                                $('.app-block .app-content .app-content-body .app-detail .app-detail-article')
                                    .niceScroll().resize();
                            });
                    }
                });

            $(document).on('click', 'a.app-detail-close-button', function() {
                $('.app-detail').removeClass('show');
                return false;
            });

            $(document).on('click', '.app-sidebar-menu-button', function() {
                $('.app-block .app-sidebar, .app-content-overlay').addClass('show');
                // $('.app-block .app-sidebar .app-sidebar-menu').niceScroll().resize();
                return false;
            });

            $(document).on('click', '.app-content-overlay', function() {
                $('.app-block .app-sidebar, .app-content-overlay').removeClass('show');
                return false;
            });

        });



    </script>
  @yield('scripts')
</body>

</html>
