<div id="player-search-bar" x-data="{ open: false }">
    <div class="form-outline" x-trap.noreturn="open" @click.outside="open = false"
         @keyup.escape.prevent.stop="open = false" data-mdb-input-init wire:ignore>
        <input type="search" id="player-search" class="form-control me-2" @focus="open = true"
               @keyup.escape.prevent="$el.blur()" wire:model.live.debounce.50ms="search"/>
        <label class="form-label" for="player-search"
               style="font-family: Roboto, 'FontAwesome'">@lang('messages.placeholder_search_player')</label>
    </div>
    <div x-show="open" class="dropdown">
        <div class="dropdown-menu dropdown-menu-end w-100 @if(sizeof($players) > 0) show @endif">
            @foreach($players as $player)
                <div class="px-3 py-2 border-bottom" style="cursor: pointer;"
                     @click="Livewire.navigate('/player/{{$player->uuid}}')">
                    <div class="d-inline-block">
                        <img src="https://minotar.net/helm/{{$player->uuid}}/20" alt="Avatar" loading="lazy">
                        <span>{{$player->username}}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@assets
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
@endassets
