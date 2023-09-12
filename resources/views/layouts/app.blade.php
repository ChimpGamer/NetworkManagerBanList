<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name') }}
    </title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>
    @livewireStyles
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <!-- Google Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"/>

    <link href="{{ asset('css/mdb.dark.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/labels.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>

    <script src="{{ asset('js/mdb.min.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- AUTOCOMPLETE -->
    <link href='//cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/easy-autocomplete.min.css' rel="stylesheet">
    <script type="text/javascript"
            src='//cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/jquery.easy-autocomplete.min.js'></script>

    @stack('styles')
</head>

<body>
<header>
    <div>
        @livewire('navbar')
    </div>
</header>

<!--Main Navigation-->
<div style="margin-top: 58px;">
    <div class="container my-5 p-2">
        @yield('content')
    </div>
</div>

<footer class="footer mt-auto py-3 text-center text-secondary">
    <div class="container">
        <strong> Copyright &copy; 2023 ChimpGamer.</strong> All rights reserved
    </div>
</footer>

@livewireScripts

@yield('script')
</body>
</html>
