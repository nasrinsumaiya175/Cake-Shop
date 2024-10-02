<!doctype html>

<html
    lang="en"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="back/dashboard/assets/"
    data-template="vertical-menu-template-free"
    data-style="light">

<head>
    @include('back.dashboard.common.head')

</head>

<body>

    @include('sweetalert::alert')

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('back.dashboard.common.sideber')

            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('back.dashboard.common.navber')

                <!-- / Navbar -->

                <!-- Content wrapper -->

                <!-- / Content -->

                @yield('main_home')


                <!-- Footer -->
                @include('back.dashboard.common.footer')

                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>



    </div>





    <!-- Core JS -->
    @include('back.dashboard.common.script')

</body>

</html>