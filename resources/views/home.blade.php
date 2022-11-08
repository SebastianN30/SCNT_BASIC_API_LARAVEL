@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        @foreach($usuariosArray as $arrayUser)
            <div class="col-md-6">
                <ul class="list-group mt-2 mb-4">
                    <li class="list-group-item active">{{$arrayUser['name']}}</li>
                    <li class="list-group-item">{{$arrayUser['username']}}</li>
                    <li class="list-group-item">{{$arrayUser['email']}}</li>
                    <li class="list-group-item">{{$arrayUser['phone']}}</li>
                </ul>    
            </div>
        @endforeach
    </div>
</div>
@endsection
