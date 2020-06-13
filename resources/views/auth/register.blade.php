@extends('layouts.apprig')

@section('regTitle')
    <div class="container border border-right-0 border-left-0 border-top-0 border-light">
        <div class="row justify-content-between">
            <div class="col-8">
                <h1 class=".text-dark-left">Register</h1>
            </div>
        </div>
    </div>
    {{--<nav class="navbar navbar-expand-md  navbar-light shadow-sm" style="background-color: #ECD715;">--}}
        {{--<div class="container  align-items-end">--}}
            {{--<a class="navbar-brand " href="">--}}
                {{--<h1 class=".text-dark-left  ">Register</h1>--}}
            {{--</a>--}}
            {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                {{--<span class="navbar-toggler-icon"></span>--}}
            {{--</button>--}}
            {{--<ul class="navbar-nav ml-auto">--}}
                {{--<!-- Authentication Links -->--}}
                {{--@guest--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="">--}}
                            {{--<h3 class="text-white"></h3>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--@endguest--}}
            {{--</ul>--}}
        {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}
@endsection
@section('content')
    <div class="container">
        <div class="row  justify-content-center align-items-center">
            <div class="col-12">
                {!! csrf_field() !!}
                <form method="POST" action="{{ route('register') }}">
                       <div class="row justify-content-between">
                           <label for="nameF" class="col-6 col-form-label font-weight-bold">FIRST NAME</label>
                           <label for="nameL" class="col-6 col-form-label  font-weight-bold">LAST NAME</label>
                       </div>
                       <div class=" row justify-content-between">
                           <div class="col-6">
                               <input id="nameF" type="text" class="form-control" name="nameF" value="" required>
                           </div>
                           <div class="col-6">
                               <input id="nameL" type="text" class="form-control" name="nameL" value="" required>
                           </div>
                       </div>
                       <div class="row justify-content-between">
                           <label for="username" class="col-md-6 col-form-label font-weight-bold">USERNAME</label>
                           <label for="email" class="col-md-6 col-form-label  font-weight-bold">EMAIL</label>
                       </div>
                       <div class="row justify-content-between">
                           <div class="col-6">
                               <input id="username" type="text" class="form-control" name="username" value="">
                           </div>
                           <div class="col-6">
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required>
                               @error('email')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                       </div>
                       <div class="row justify-content-between">
                           <label for="password" class="col-6 col-form-label  font-weight-bold">PASSWORD</label>
                           <label for="password-confirm" class="col-6 col-form-label  font-weight-bold">CONFIRM PASSWORD</label>
                       </div>
                       <div class="row justify-content-between">
                           <div class="col-6">
                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                               @error('password')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                           <div class="col-md-6">
                               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                           </div>
                       </div>
                       {{--<div class="form-group">--}}
                       {{--<label for="sex" class="col-md-6 col-form-label  font-weight-bold">GENDER</label>--}}
                       {{--<div class="col-md-6">--}}
                       {{--<input id="sex" type="text" class="form-control " name="sex" value="">--}}
                       {{--</div>--}}
                       {{--</div>--}}
                       <div class="row justify-content-between">
                           <label for="sex" class="col-6 col-form-label  font-weight-bold">GENDER</label>
                       </div>
                       <div class="row justify-content-between">
                           <div class="col-6">
                               <input id="sex" type="text" class="form-control " name="sex" value="">
                           </div>
                       </div>
                       <div class="row  d-inline ">
                           <div class="form-inline justify-content-end">
                               <div class="col-3">
                                   <a class="btn btn-success btn-sm btn-block text-white" href="{{ route('login') }}">
                                       Back to login
                                   </a>
                               </div>
                               <div class="col-md-3">
                                   <button type="submit" class="btn btn-primary btn-sm btn-block text-white">
                                       Submit
                                   </button>
                               </div>
                           </div>
                       </div>
                </form>
            </div>
        </div>
    </div>
@endsection
