<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
    @include('admin.body')
    <!-- container-scroller -->
    <!-- page-body-wrapper ends -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>