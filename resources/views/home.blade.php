@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   

                    @guest

                            <p>You are not loggin ! Plase Loggin out</p>

                    @else
                            <p>You are loggin !</p>
                            
                    @endguest
                    		<a class="btn btn-primary" href="{{route('saludo')}}">Go to Project</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
