@extends('layouts.app')
@section('homeTitle')
    <div class="container border border-right-0 border-left-0 border-top-0 border-light">
        <div class="row   align-items-baseline">
            <div class="col-10">
                <h1 class=".text-dark ">Todo Edit</h1>
            </div>
            {{--@guest--}}
            <div class="col-2 btn-group">
                <a class="btn  btn-sm" href="{{ route('register') }}">
                    <h3 class="text-white">register</h3>
                </a>
                <a class="btn  btn-sm" href="{{ route('login') }}">
                    <p class="text-dark">Login</p>
                </a>
            </div>
            {{--@else--}}
            {{--<div class="col-2 btn-group">--}}
            {{--<a class="btn  btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout').submit();"><p class="text-dark">logout</p></a>--}}
            {{--</div>--}}
            {{--@endguest--}}
        </div>
    </div>
    <br>
@endsection
@section('content')

    <div class="container">
        <div class="row justify-content-center">
                    <form method="post" action='edit/{{$todo->id}}'>
                        @csrf
                        @method('PUT')
                        <div align="center" style="border:2px solid;border-radius: 30px 30px 30px 30px;width:1100px;background-color:white;">
                            <input type="text" style="float: left;border: 0px; border-radius: 30px 30px 30px 30px;width:800px;" name="todoth" value="{{$todo->todoth}}" >
                            <input type="date" style="border: 0px;width: 150px;" name="time" value="{{$todo->time}}">
                            <input type="submit" value="儲存">
                        </div>
                    </form>
        </div>
    </div>


@endsection
