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
                <x-nav-item :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                    @lang('messages.navbar_home')
                </x-nav-item>
                <x-nav-item :href="route('bans')" :active="request()->routeIs('bans')" wire:navigate>
                    @lang('messages.navbar_bans', ['total_bans' => $total_bans])
                </x-nav-item>
                <x-nav-item :href="route('mutes')" :active="request()->routeIs('mutes')" wire:navigate>
                    @lang('messages.navbar_mutes', ['total_mutes' => $total_mutes])
                </x-nav-item>
                <x-nav-item :href="route('kicks')" :active="request()->routeIs('kicks')" wire:navigate>
                    @lang('messages.navbar_kicks', ['total_kicks' => $total_kicks])
                </x-nav-item>
                <x-nav-item :href="route('warns')" :active="request()->routeIs('warns')" wire:navigate>
                    @lang('messages.navbar_warns', ['total_warns' => $total_warns])
                </x-nav-item>
            </ul>

            @livewire('player-search-bar')
        </div>
    </div>
    <!-- Container wrapper -->
</nav>
