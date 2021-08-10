{{-- @include('admin.layouts.header')
@include('admin.layouts.sidebar')
@include('admin.layouts.topbar')

<div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid">

    @yield('admin')
</div>
</div>
@include('admin.layouts.footer') --}}



        <!-- Sidebar -->
       @include('admin.layouts.header')
       @include('admin.layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.layouts.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('admin')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>


{{-- @include('admin.layouts.footer') --}}
@include('admin.layouts.scripts')
</body>

</html>
