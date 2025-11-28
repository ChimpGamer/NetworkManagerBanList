<?php

namespace App\Livewire;

use App\Models\Player;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class PlayerSearchBar extends Component
{

    public string $search = '';

    public function render(): View|Factory|Application
    {
        $results = [];

        $blockedPlayers = explode(',', config('custom.blocked_players'));
        if (strlen($this->search) >= 3) {
            $results = Player::select('uuid', 'username')
                ->where('username', $this->search)
                ->orWhere('username', 'like', '%'.$this->search.'%')
                ->whereNotIn('uuid', $blockedPlayers)
                ->limit(6)->get();
        }

        return view('livewire.player-search-bar')->with('players', $results);
    }
}
