<!DOCTYPE html>
<html>
  <head>

@include('admin.css')
  </head>
  <body>
  @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

 @include('admin.back')

@yield('content')


        @include('admin.footer')
  </body>
</html>
