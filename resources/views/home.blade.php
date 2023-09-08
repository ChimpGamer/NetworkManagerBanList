@extends('layouts.app')

@section('content')
    <div id="logo" class="text-center p-4">
        <img src="/images/Logo.jpg" class="img-fluid">
    </div>

    <div class="jumbotron">
        <div class="text-center">
            <h1>Welcome to the NetworkManager Ban List.</h1>
            <h5>This site contains a list of all punishments by NetworkManager.</h5>
            <h5>Total Punishments: {{$total_punishments}}</h5>
        </div>
    </div>
@endsection
