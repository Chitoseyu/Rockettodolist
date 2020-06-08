@extends('layouts.apprig')

@section('content')
    <body>
    <div class="container" style="background-color: #ECD715;">
        <div class="row  justify-content-center align-items-center  invisible"><span >???????</span></div>
        <div class="row  justify-content-center align-items-center">

            <div class="col-md-6">
                <form method="POST" action="{{ route('register') }}">
                            {{--@csrf--}}
                    <div class="row justify-content-between">
                        <label for="name1" class="col-md-6 col-form-label font-weight-bold">FIRST NAME</label>
                        <label for="name2" class="col-md-6 col-form-label  font-weight-bold">LAST NAME</label>
                    </div>
                    <div class=" row justify-content-between">
                        <div class="col-md-6">
                                    <input id="name1" type="text" class="form-control @error('name') is-invalid @enderror" name="name1" value="" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        <div class="col-md-6">
                                    <input id="name2" type="text" class="form-control @error('name') is-invalid @enderror" name="name2" value="" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                    </div>
                    <div class="row justify-content-between">
                        <label for="name" class="col-md-6 col-form-label font-weight-bold">USERNAME</label>
                        <label for="email" class="col-md-6 col-form-label  font-weight-bold">EMAIL</label>
                    </div>
                    <div class="row justify-content-between">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror rounded-pill pr-5" name="name" value="">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="row justify-content-between">
                        <label for="name" class="col-md-6 col-form-label  font-weight-bold">PASSWORD</label>
                        <label for="email" class="col-md-6 col-form-label  font-weight-bold">CONFIRM PASSWORD</label>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-6">
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
                        <label for="sex" class="col-md-6 col-form-label  font-weight-bold">GENDER</label>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-6">
                            <input id="sex" type="text" class="form-control " name="sex" value="">
                        </div>
                    </div>
                    <div class="row justify-content-between d-inline ">
                        <div class="form-inline">
                            <div class="col-md-6">
                                <a class="btn btn-success btn-lg btn-block" href="{{ route('login') }}">
                                    Back to login
                                </a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    </body>

@endsection
