<!DOCTYPE html>
<html lang="en">

<head>
    @include('back.dashboard.admin.common.head')
</head>

<body class="with-welcome-text">
    @include('sweetalert::alert')

    @include('back.dashboard.admin.common.header')

    <div class="container-scroller d-flex"> <!-- Make the container a flex container -->
        @include('back.dashboard.admin.common.sidebar') <!-- Sidebar on the left -->

        <div class="main-panel flex-grow-1"> <!-- Main panel should grow to fill the available space -->
            @include('back.dashboard.admin.common.navbar') <!-- Navbar at the top -->

            <div class="content-wrapper mt-12 d-flex justify-content-center align-items-start" style="min-height: calc(100vh - 100px); padding-top: 20px;">
                @yield('main_content') <!-- This is where the form will be injected -->
            </div>
        </div>
    </div>

    @include('back.dashboard.admin.common.footer')
    @include('back.dashboard.admin.common.script')

</body>

</html>