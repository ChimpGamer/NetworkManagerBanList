<?php

namespace App\Livewire;

use App\Models\Player;
use Livewire\Component;

class PlayerSearchBar extends Component
{

    public string $search = '';

    public function render()
    {
        $results = [];

        if (strlen($this->search) >= 3) {
            $results = Player::select('uuid', 'username')
                ->where('username', $this->search)
                ->orWhere('username', 'like', '%'.$this->search.'%')
                ->limit(6)->get();
        }

        return view('livewire.player-search-bar')->with('players', $results);
    }
}
