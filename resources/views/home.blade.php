@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" align="center" style="margin-top: 100px">
            <div class="panel panel-primary">
                <div class="panel-heading"><font style="font-family: 'Source Sans Pro'; background-image: 'urs('login.jpg');  " size="20">Login Succesful</div>

                <div class="panel-body">
                    You are logged in as{{ Auth::user()->permission }}
                </div>
                <a href="/">Home</a>
            </div>
        </div>
    </div>
</div>
@endsection
