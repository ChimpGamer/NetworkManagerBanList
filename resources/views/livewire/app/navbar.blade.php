<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand">
            <img src="{{ config('custom.navbar_logo_url', asset('images/full_logo.png')) }}" height="25" width="auto"
                 alt="NetworkManager Logo" loading="lazy"/>
        </a>

        <!-- Toggle button -->
        <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a wire:navigate class="nav-link @if(Route::currentRouteName() == 'home') active @endif" aria-current="page"
                       href="{{ route('home') }}">@lang('messages.navbar_home')</a>
                </li>
                <li class="nav-item">
                    <a wire:navigate class="nav-link @if(Route::currentRouteName() == 'bans') active @endif"
                       href="{{ route('bans') }}">@lang('messages.navbar_bans', ['total_bans' => $total_bans])</a>
                </li>
                <li class="nav-item">
                    <a wire:navigate class="nav-link @if(Route::currentRouteName() == 'mutes') active @endif"
                       href="{{ route('mutes') }}">@lang('messages.navbar_mutes', ['total_mutes' => $total_mutes])</a>
                </li>
                <li class="nav-item">
                    <a wire:navigate class="nav-link @if(Route::currentRouteName() == 'kicks') active @endif"
                       href="{{ route('kicks') }}">@lang('messages.navbar_kicks', ['total_kicks' => $total_kicks])</a>
                </li>
                <li class="nav-item">
                    <a wire:navigate class="nav-link @if(Route::currentRouteName() == 'warns') active @endif"
                       href="{{ route('warns') }}">@lang('messages.navbar_warns', ['total_warns' => $total_warns])</a>
                </li>
            </ul>

            @livewire('player-search-bar')
        </div>
    </div>
    <!-- Container wrapper -->
</nav>
