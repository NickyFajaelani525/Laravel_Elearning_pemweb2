<!DOCTYPE html>
<html lang="en">

  <!-- ======= Head ======= -->
@include('admin.partials._head')

<body>

  <!-- ======= Header ======= -->
@include('admin.partials._header')
 

  <!-- ======= Sidebar ======= -->
@include('admin.partials._sidebar')
 

  <main id="main" class="main">

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@include('admin.partials._footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- script -->
@include('admin.partials._script')


  <!-- Template Main JS File -->
  <script src="{{ asset('NiceAdmin') }}/assets/js/main.js"></script>

</body>

</html>