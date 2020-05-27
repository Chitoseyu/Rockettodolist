@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between">
        <div class="col-md-4">

            <img src="https://memeprod.sgp1.digitaloceanspaces.com/user-wtf/1590315607378.jpg" class="img-thumbnail rounded float-right" alt="rocket">
        </div>


        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--你登入了!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</div>
@endsection
