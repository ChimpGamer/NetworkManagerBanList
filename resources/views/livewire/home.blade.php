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

<div>
    <div id="logo" class="text-center p-4">
        <img src="{{ config('custom.home_logo_url', asset('images/Logo.jpg')) }}" class="img-fluid" alt="Logo" height="auto" width="auto">
    </div>

    <div class="jumbotron bg-body bg-opacity-50">
        <div class="text-center">
            @lang('messages.homepage_text', ['total_punishments' => $total_punishments])
        </div>
    </div>
</div>
