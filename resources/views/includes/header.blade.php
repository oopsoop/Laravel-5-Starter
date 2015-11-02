{{-- <link rel="stylesheet" href="{{asset('css/header.css')}}"> --}}
<div class="header">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Laravel-5-Starter</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li ><a href="/home">{{trans('header.setup')}}</a></li>
                    <li class="dropdown">
                        <a href="/concept" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{trans('header.concept')}}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">{{trans('header.concept.routing')}}</a></li>
                            <li><a href="#">{{trans('header.concept.middleware')}}</a></li>
                            <li><a href="#">{{trans('header.concept.controller')}}</a></li>
                            <li><a href="#">{{trans('header.concept.request')}}</a></li>
                            <li><a href="#">{{trans('header.concept.response')}}</a></li>
                            <li><a href="#">{{trans('header.concept.view')}}</a></li>
                            <li><a href="#">{{trans('header.concept.blade')}}</a></li>
                       </ul>
                    </li>
                    <li ><a href="/tutorial">{{trans('header.tutorial')}}</a></li>
                    <li ><a href="/architecture">{{trans('header.architecture')}}</a></li>
                    <li class="dropdown">
                        <a href="/services" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{trans('header.services')}}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="cache">{{trans('header.services.cache')}}</a></li>
                            <li><a href="session">{{trans('header.services.session')}}</a></li>
                            <li><a href="announcement">{{trans('header.services.pagination')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                            <li><a href="#">{{trans('header.services')}}</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="/database" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
                            {{trans('header.database')}}
                            <span class="caret" ></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a>{{trans('header.database.builder')}}</a></li>
                            <li><a>{{trans('header.database.migrate')}}</a></li>
                            <li><a>{{trans('header.database.seed')}}</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="/orm" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >
                            {{trans('header.orm')}}
                            <span class="caret" ></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a>{{trans('header.orm.collection')}}</a></li>
                            <li><a>{{trans('header.orm.relation')}}</a></li>
                            <li><a>{{trans('header.orm.mutator')}}</a></li>
                            <li><a>{{trans('header.orm.serial')}}</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/cache" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{trans('header.3rd')}}
                            <span class="caret" ></span>
                         </a>
                    <ul class="dropdown-menu" role="menu">
                    <li ><a href="/cache">{{trans('header.3rd.admin')}}</a></li>
                    <li ><a href="/cache">{{trans('header.3rd.captcha')}}</a></li>
                        </ul>
                    </li>
                    @if(isset($currentUser))
                        <li >
                            <a href="/memberarea/index">Member Area</a>
                        </li>
                    @else
                        <li >
                            <a href="#" data-toggle="modal" data-target="#loginModal">Member Area</a>
                        </li>
                    @endif
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            @if(Session::get('locale') ==='cn')
                                <img src="{{asset('images/language-china.jpg')}}"/>中文
                            @else
                                <img src="{{asset('images/language-en.jpg')}}"/>English
                            @endif
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0)" onclick="setlocale('cn')"><img src="{{asset('images/language-china.jpg')}}"/>中文</a></li>
                            <li><a href="javascript:void(0)" onclick="setlocale('en')"><img src="{{asset('images/language-en.jpg')}}"/>English</a></li>
                        </ul>
                    </li>
                    <li>
                        @if(isset($currentUser)&&$currentUser)
                            <a class="login button" href="/auth/logout">退出</a>
                        @else
                            <a class="register button" href="/auth/register">注册</a>
                    </li><li>
                        <a class="login button" href="/auth/login">登录</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
