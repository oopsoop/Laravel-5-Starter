@extends('layouts.default')
@section('head')
<link rel="stylesheet" href="{{asset('css/libs/timeline.css')}}">
<link rel="stylesheet" href="{{asset('css/announcement.css')}}">
@stop
@section('content')

@if(session('message'))
<div class="alert alert-info center" id="message">
  {{session('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<div class="row announcement">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading ">
        Cache Demo
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <ul class="">
          <li>
            <div class="">
              <div class="">
                <h4 class="">缓存Key为：{{$key}}</h4>
                <hr/>
              </div>
              <div class="">
                <p>缓存Key   '{{$key}}'      的值为：{{$value}}</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- /.panel-body -->
    </div>
  </div>
</div>

@stop
