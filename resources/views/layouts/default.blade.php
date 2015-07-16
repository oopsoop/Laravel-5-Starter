<!DOCTYPE html>
<html>
  <head>
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/bootstrap.min.css')}}">
    <script src="{{asset('js/libs/jquery.min.js')}}"></script>
    @yield('head')
  </head>
  <body>
    <div class="header">@include('includes.header')</div>
    <div class="contents">@yield('content')</div>
    <div class="footer">@include('includes.footer')</div>
  </body>
</html>
