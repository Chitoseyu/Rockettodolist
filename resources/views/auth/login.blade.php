@extends('layouts.applog')
@section('logTitle')
    <div class="container border border-right-0 border-left-0 border-top-0 border-light">
        <div class="row justify-content-between align-items-baseline">
            <div class="col-9">
                <h1 class=".text-dark ">Login</h1>
            </div>
            <div class="col-3">
                <a class="btn btn-sm" href="{{ route('register') }}">
                    <h3 class="text-white">Dont have an account?</h3>
                </a>
            </div>
        </div>
    </div>
    {{--<div  class="container" id="app-2" >--}}
        {{--<nav class="navbar navbar-expand-md  navbar-light shadow-sm">--}}
            {{--<div class="container  align-items-end">--}}
                {{--<a class="navbar-brand " href="">--}}
                    {{--<h1 class=".text-dark-left  ">Login</h1>--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}
                {{--<ul class="navbar-nav ml-auto">--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@guest--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="{{ route('register') }}">--}}
                                {{--<h3 class="text-white">Dont have an account?</h3>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--@endguest--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</nav>--}}
    {{--</div>--}}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="form-group row justify-content-center">
                    <img class="border border-dark rounded-circle " src="https://upload.cc/i1/2020/06/09/xzLFYh.png" alt="Rocket">
                </div>
                <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row justify-content-center" >
                                <div class="col-8">
                                    <input id="username" type="text" class="form-control" name="username" value="" placeholder="USERNAME" required  autofocus>
                                </div>
                                {{-- 原本用信箱登入 我改成Username<label for="email" class="col-md-4 col-form-label text-md-right">電子信箱</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" autofocus>--}}
                                    {{--@error('email')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@enderror--}}
                                {{--</div>--}}
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-8">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="PASSWORD">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-6 offset-3">
                                    <button type="submit" class="btn  btn-sm text-white btn-block">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                <div class="row justify-content-center border border border-right-0 border-left-0 border-bottom-0 border-light">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="">
                                    <p>forget your account password</p>
                                </a>
                            @endif
                </div>
            </div>
        </div>
    </div>
@endsection
