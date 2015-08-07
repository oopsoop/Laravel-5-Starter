<!-- resources/views/auth/login.blade.php -->
@extends('layouts.default')
@section('content')
@if(session('message'))
<div class="alert alert-info center" id="message">
  {{session('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if(Session::get('faillogincount')>3)
<div class="modal" id="loginpage" tabindex="-1" role="dialog" aria-labelledby="warnLoginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title modal-warn" id="warnLoginModalLabel">Register New Account</h4>
      </div>

      <div class="modal-body">
        <form method="POST" action="/auth/register">
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1"  value="{{ old('name')}}"  placeholder="examplename">
                                                                                                                                   </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1"  value="{{ old('email') }}" placeholder="example@somewhere.com">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="exampleInputPasswordConfirmation1" placeholder="Repeat Password">
          </div>

          <div class="form-group">
            <label for="verify">Input the text contained in image</label>
            <div class="row">
              <div class="col-md-8">
                <input type="text" class="form-control" name="captcha" id="verify" placeholder="">
              </div>
              <div class="col-md-4">
                <img src="{{$captchaurl}}">
              </div>
            </div>
          </div>

          <div class="row modal-footer">
            <div class="col-md-6">
              <button type="submit" class="btn btn-red circle pull-right btn-login">Register</button>
            </div>
            <div class="col-md-6">
              <button type="button" class="btn btn-primary circle pull-left btn-cancel" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@else
<div class="modal" id="loginpage" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="loginModalLabel">Login with your email account</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="/auth/register">
          {!! csrf_field() !!}
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1"  value="{{ old('name')}}"  placeholder="examplename">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1"  value="{{ old('email') }}" placeholder="example@somewhere.com">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="exampleInputPasswordConfirmation1" placeholder="Repeat Password">
          </div>

          <div class="row modal-footer">
            <div class="col-md-6">
              <button type="submit" class="btn btn-red circle pull-right btn-login">Register</button>
            </div>
            <div class="col-md-6">
              <button type="button" class="btn btn-primary circle pull-left btn-cancel" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endif
@stop
