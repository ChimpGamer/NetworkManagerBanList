<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-mdb-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name') }}
    </title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

    <!-- Google Fonts Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"/>

    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/labels.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>

    <!-- AUTOCOMPLETE -->
    <link href='//cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/easy-autocomplete.min.css' rel="stylesheet">

    @stack('styles')
</head>

<body style="background-image: url({{ config('custom.body_background_image_url', 'images/background.jpg') }});">
<!-- Back to top button -->
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>

<header>
    <div>
        @livewire('show-navbar')
    </div>
</header>

<!--Main Navigation-->
<div style="margin-top: 58px;">
    <div class="container my-5 p-2">
        @yield('content')
    </div>
</div>

<footer class="footer mt-auto py-3 text-center text-secondary footer-text-shadow">
    <div class="container">
        <strong> Copyright &copy; 2023 ChimpGamer.</strong> All rights reserved
    </div>
</footer>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- MDB -->
<script src="{{ asset('js/mdb.umd.min.js') }}"></script>

<!-- AUTOCOMPLETE -->
<script type="text/javascript" src='//cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/jquery.easy-autocomplete.min.js'></script>

<!-- Custom -->
<script src="{{ asset('js/custom.js') }}"></script>

@yield('script')
</body>
</html>
