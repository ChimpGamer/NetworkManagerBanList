@extends('layouts.app')

@push('styles')
    <style>
        @keyframes logo {
            from {
                transform: scale(1, 1);
            }
            to {
                transform: scale(1.03, 1.03);
            }
        }

        #logo img {
            animation-name: logo;
            animation-duration: 1s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }
    </style>
@endpush

@section('content')
    <div id="logo" class="text-center p-4">
        <img src="/images/Logo.jpg" class="img-fluid">
    </div>

    <div class="jumbotron bg-body bg-opacity-50">
        <div class="text-center">
            <h1>Welcome to the NetworkManager Ban List.</h1>
            <h5>This site contains a list of all punishments by NetworkManager.</h5>
            <h5>Total Punishments: {{$total_punishments}}</h5>
        </div>
    </div>
@endsection
