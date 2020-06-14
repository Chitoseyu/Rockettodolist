@extends('layouts.app')
@section('homeTitle')
    <div class="container border border-right-0 border-left-0 border-top-0 border-light">
        <div class="row   align-items-baseline">
            <div class="col-10">
                <h1 class=".text-dark ">Todo List</h1>
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
    <style>
        .hidden {
            display: none;
        }
        .oblong {border: 1px; border-radius: 30px 30px 30px 30px;}

        .btn-outline-primary{color:#3490dc;background-color:white;background-image:none;border-color:#3490dc;}
    </style>
        <form method="post" action='/newtodo' >
            {{ csrf_field() }}
            <li align="center" class="mb-1" style="border:2px solid;border-radius: 30px 30px 30px 30px;background-color:white;list-style-type:none;">
                <input type="text" style="float: left;border: 0px; border-radius: 30px 30px 30px 30px;" class="ml-2" name="todoth" >
                <input type="date" style="border: 0px;" name="time">
                <button type="submit" style="border:1px ;border-radius: 30px 30px 30px 30px;"><i class="fas fa-arrow-down"></i></button>
            </li>
        </form>

        <br>
        <div><a href="#" onclick="link('b')">Todo</a>
            <a href="#" onclick="link('a')">Finish</a>
        </div>
    <ul  id="a" >
            @foreach($todo as $todo)
                @if($todo->finish=='0')
                <li onclick="finish()" id="a" style="border:1px solid;border-radius: 30px 30px 30px 30px; list-style-type:none;" class="btn-outline-primary mb-2"; >
                    <font class="ml-2" color="black">{{$todo->todoth}}</font>
                    <a style="float: right; color:black;" href="/delete/{{$todo->id}}"><i class="fas fa-trash-alt ml-1"></i></a>
                    <a style="float: right; color: black;" href="/edit/{{$todo->id}}"><i class="fas fa-edit ml-1"></i></a>
                </li>
                @endif
            @endforeach
    </ul>

    <script>
        function link(id) {
            let group =['a','b'];
            let dom = document.getElementById(id);

            let ls = group.filter(item=>item!==id);
            let show = document.getElementById(ls[0]);
            //
            dom.classList.toggle('hidden');
            show.classList.toggle('hidden');
        }

    </script>
@endsection
