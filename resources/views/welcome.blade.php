@extends('layouts.default')
@section('head')
<script src="{{asset('js/libs/jquery.fullPage.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/libs/jquery.fullPage.css')}}">
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@stop
@section('content')

<div id="fullpage">
  <div class="section" id="section0">
    <div class="layer">
      <div class="intro">
        <h1 class="sectiontitle ">Laravel 5 Starter</h1>
        <h2> Third-party Packages,AND,Tutorials In Detail!</h2>
      </div>
      <button class="btn-lg button-wrapper col-md-2 col-md-offset-5" ><a class="register button " href="/register">现在开始体验</a></button>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="content">
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <caption><h1>Features</h1></caption>
            <thead>
              <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Demo</th>
                <th>Tutorial</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Demo</th>
                <th>Tutorial</th>
                <th>Description</th>
              </tr>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Demo</th>
                <th>Tutorial</th>
                <th>Description</th>
              </tr>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Demo</th>
                <th>Tutorial</th>
                <th>Description</th>
              </tr>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Demo</th>
                <th>Tutorial</th>
                <th>Description</th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="section"><h1>Coming Soon...</h1></div>
  <div class="section"><h1>Coming Soon...</h1></div>
  <div class="section"><h1>Coming Soon...</h1></div>
</div>
<script src="{{asset('js/home.js')}}"></script>
@stop
