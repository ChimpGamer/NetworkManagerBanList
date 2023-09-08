<nav id="main-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand">
            <img src="/images/full_logo.png" height="25" alt="NetworkManager Logo" />
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif" aria-current="page" href="/">@lang('messages.navbar_home')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'bans') active @endif" href="/bans">@lang('messages.navbar_bans', ['total_bans' => $total_bans])</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'mutes') active @endif" href="/mutes">@lang('messages.navbar_mutes', ['total_mutes' => $total_mutes])</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'kicks') active @endif" href="/kicks">@lang('messages.navbar_kicks', ['total_kicks' => $total_kicks])</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'warns') active @endif" href="/warns">@lang('messages.navbar_warns', ['total_warns' => $total_warns])</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Container wrapper -->
</nav>
