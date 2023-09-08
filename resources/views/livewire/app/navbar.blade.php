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

        <form id="searchbar-form" style="float: right !important;margin-left: auto;">
            <div class="position-relative">
                <input type="text" placeholder="&#xf002; Search Player..." id="searchbar" style="font-family: Roboto, 'FontAwesome'">
            </div>
        </form>
    </div>
    <!-- Container wrapper -->
</nav>

@section('script')
    <script>
        $('#searchbar').easyAutocomplete({
            url: function (data) {
                if (data.length >= 3) {
                    return '/searchPlayer?username=' + data;
                }
                return null;
            },
            getValue: 'username',
            requestDelay: 150,
            template: {
                type: "iconLeft",
                fields: {
                    iconSrc: "icon"
                }
            },
            list: {
                onClickEvent: function () {
                    window.location.href = '/player/' + document.getElementById('searchbar').value;
                },
                match: {
                    enabled: true
                },
                maxNumberOfElements: 6,
                showAnimation: {
                    type: "slide",
                    time: 400
                },
                hideAnimation: {
                    type: "slide",
                    time: 400
                }
            }
        });

        $("#searchbar-form").submit(function (event) {
            event.preventDefault();
            window.location.href = '/player/' + document.getElementById('searchbar').value;
        });
    </script>
@endsection
