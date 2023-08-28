
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{\App\Models\Setting::getSetting()->title_en}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('font/iconsmind-s/css/iconsminds.css') }}" />
    <link rel="stylesheet" href="{{ asset('font/simple-line-icons/css/simple-line-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/vendor/quill.snow.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/quill.bubble.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.rtl.only.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/fullcalendar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/datatables.responsive.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/select2-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/glide.core.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/cropper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-stars.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap-datepicker3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/component-custom-switch.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

</head>

<body id="app-container" class="menu-default show-spinner vertical boxed">
<nav class="navbar fixed-top">
    <div class="d-flex align-items-center navbar-left">

        <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                <rect x="0.5" y="0.5" width="25" height="1" />
                <rect x="0.5" y="7.5" width="25" height="1" />
                <rect x="0.5" y="15.5" width="25" height="1" />
            </svg>
        </a>

    </div>

    <div class="navbar-right">
        <div class="header-icons d-inline-block align-middle">
            <div class="d-none d-md-inline-block align-text-bottom mr-3">
                <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1" data-toggle="tooltip" data-placement="left" title="Dark Mode">
                    <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                    <label class="custom-switch-btn" for="switchDark"></label>
                </div>
            </div>

            <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                <i class="simple-icon-size-fullscreen"></i>
                <i class="simple-icon-size-actual"></i>
            </button>

        </div>

        <div class="user d-inline-block">
            <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="name">{{ Auth::user()->name }}</span>
                <span>
                        <img alt="Profile Picture" src="{{asset(\App\Models\Setting::getSetting()->logo)}}" />
                    </span>
            </button>
        </div>
    </div>
</nav>

<div class="menu">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li>
                    <a href="/home">
                        <i class="iconsminds-home"></i>
                        <span>لوحة التحكم</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard">
                        <i class="iconsminds-home-1"></i>
                        <span>الرئيسية</span>
                    </a>
                </li>
                <li>
                    <a href="/info">
                        <i class="iconsminds-information"></i>
                        <span>عن التطبيق</span>
                    </a>
                </li>
                <li>
                    <a href="/vantages">
                        <i class="iconsminds-up"></i>
                        <span>مميزات التطبيق</span>
                    </a>
                </li>
                <li>
                    <a href="/howuse">
                        <i class="iconsminds-home-4"></i>
                        <span>كيفية الاستخدام</span>
                    </a>
                </li>
                <li>
                    <a href="/contact-us">
                        <i class="iconsminds-user"></i>
                        <span>اتصل بنا</span>
                    </a>
                </li>
                <li>
                    <a href="/contact-us-2">
                        <i class="iconsminds-add-user"></i>
                        <span>التوظيف</span>
                    </a>
                </li>
                <li>
                    <a href="/admin-about-us">
                        <i class="iconsminds-information"></i>
                        <span>من نحن</span>
                    </a>
                </li>
                <li>
                    <a href="/admin-how-use">
                        <i class="iconsminds-home-4"></i>
                        <span>طريقة الاستخدام</span>
                    </a>
                </li>
                <li>
                    <a href="/admin-privacy-policy">
                        <i class="iconsminds-police"></i>
                        <span>سياسة الخصوصية</span>
                    </a>
                </li>
                <li>
                    <a href="/setting">
                        <i class="iconsminds-security-settings"></i>
                        <span>الاعدادات</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>
@yield('content')
<footer class="page-footer">
    <div class="footer-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p class="mb-0 text-muted">{{Auth()->user()->name}} &copy; <script>
                            new Date().getFullYear() && document.write(" " + new Date().getFullYear());

                        </script>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/vendor/quill.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/vendor/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('js/vendor/chartjs-plugin-datalabels.js') }}"></script>
<script src="{{ asset('js/vendor/moment.min.js') }}"></script>
<script src="{{ asset('js/vendor/fullcalendar.min.js') }}"></script>
<script src="{{ asset('js/vendor/datatables.min.js') }}"></script>
<script src="{{ asset('js/vendor/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/vendor/glide.min.js') }}"></script>
<script src="{{ asset('js/vendor/progressbar.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('js/vendor/select2.full.js') }}"></script>
<script src="{{ asset('js/vendor/nouislider.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/vendor/Sortable.js') }}"></script>
<script src="{{ asset('js/vendor/mousetrap.min.js') }}"></script>
<script src="{{ asset('js/vendor/cropper.min.js') }}"></script>
<script src="{{ asset('js/dore.script.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="https:////cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@yield('script')

</body>


</html>

