@extends('layouts.app')
@section('homeTitle')
    <div class="container border border-right-0 border-left-0 border-top-0 border-light">
        <div class="row   align-items-baseline">
            <div class="col-10">
                <h1 class=".text-dark ">Welcome to U memo</h1>
            </div>
            @guest
            <div class="col-2 btn-group">
                <a class="btn  btn-sm" href="{{ route('register') }}">
                    <h3 class="text-white">register</h3>
                </a>
                <a class="btn  btn-sm" href="{{ route('login') }}">
                    <p class="text-dark">Login</p>
                </a>
            </div>
            @else
                <div class="col-2 btn-group">
                    <a class="btn  btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout').submit();"><p class="text-dark">logout</p></a>
                </div>
            @endguest
        </div>
    </div>
@endsection
@section('content')
        <div class="row align-items-stretch">
                {{--<div class="row no-gutters">--}}
                <div class="col-3  align-items-baseline">
                    <img src="https://upload.cc/i1/2020/06/08/wpZNn2.png" class="img"  alt="rocket">
                </div>
                <div class="col-9">
                        <p class="h3 font-weight-bold text-right">            </p>
                        <p class="h3 font-weight-bold text-right">            </p>
                        <p class="h3 font-weight-bold text-right">            </p>
                        <p class="h3 font-weight-bold text-right">            </p>
                        <p class="h3 font-weight-bold text-right">            </p>
                        <p class="h3 font-weight-bold text-right">            </p>
                        <p class="h3 font-weight-bold text-right">Time files.</p>
                        <p class="h3 font-weight-bold text-right">Time tries truth.</p>
                        <p class="h3 font-weight-bold text-right">Take time by the forelock.</p>
                        <p class="h3 font-weight-bold text-right">Time cannot be won again.</p>
                        <p class="h3 font-weight-bold text-right">Time is, time was, and time is past.</p>
                        <p class="h3 font-weight-bold text-right">Time spent in vice or folly is doubly lost.</p>
                        <p class="h3 font-weight-bold text-right">Time is a file that wears and makes no noise.</p>
                </div>

        </div>
@endsection
