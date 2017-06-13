<!DOCTYPE html>
<html>

<head>
    <title>Laravel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    @section('style')
    <link rel="stylesheet" href="{{asset('css/libs/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/animate.min.css')}}">
    @show

    @section('scripts')
    <script src="{{asset('js/libs/jquery.min.js')}}"></script>
    <script src="{{asset('js/libs/bootstrap.min.js')}}"></script>

    @show
    <meta name="_token" content="{{csrf_token() }}" /> @yield('head')
    @yield('css')
</head>

<body>
    <div class="header">@include('includes.header')</div>
    <div class="contents">@yield('content')</div>
    <div class="footer">@include('includes.footer')</div>

              @yield('js')
              </body>
<script type="text/javascript" src="{{asset('js/header.js')}}"></script>
<script type="text/javascript" src="{{asset('js/footer.js')}}"></script>

</html>
