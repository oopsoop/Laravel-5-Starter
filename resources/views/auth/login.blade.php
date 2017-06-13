<!-- resources/views/auth/login.blade.php -->
@extends('layouts.default')
    @section('style')
    @parent
    <!-- Website Font style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    @stop

        @section('scripts')
        @parent
        <!--script src="{{asset('js/auth/login.js')}}"></script-->
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

		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
                             <h1 class="title">Laravel 5 Starter</h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="main-login main-center">
                          <form class="form-horizontal" method="POST" action="/login">
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

                              @if(Session::get('faillogincount')>3)
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
                                                                                                                                                                                                                                            @endif

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Login</button>
						</div>
						<div class="login-register">
				           <a href="/register">Register</a>
				         </div>
                        <div class="login-register">
                           <a href="/auth/register">Forget Password</a>
                        </div>
					</form>
				</div>
			</div>
		</div>
@stop
