<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('ui/backend') }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('ui/backend') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('ui/backend') }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('ui/backend') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="{{ asset('ui/backend') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('ui/backend') }}/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('ui/backend') }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('ui/backend') }}/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- navbar start -->
   @include('backend.layouts.partials.navbar')
    <!-- navbar end -->
    <div class="container-fluid page-body-wrapper">

      <!-- sidebar start -->
     @include('backend.layouts.partials.sidebar')
      <!-- sidebar end -->
      <div class="main-panel ">
        <div class="content-wrapper">
             @yield('content')
             @include('backend.layouts.partials.footer')
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- footer start -->

        <!-- footer end -->
      </div>
      <!-- main-panel ends -->

    </div>
    <!-- page-body-wrapper ends -->

  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
@include('backend.layouts.partials.script')
  <!-- End custom js for this page-->
</body>

</html>

