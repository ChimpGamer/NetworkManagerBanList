<?php

namespace App\Http\Livewire;

use App\Models\Player;
use App\Models\Punishment;
use Illuminate\View\View;
use Livewire\Component;

class ShowPlayer extends Component
{
    public Player $player;
    public $punishmentsCount;
    public $bans;
    public $mutes;
    public $kicks;
    public $warns;

    public function mount() {
        $this->punishmentsCount = Punishment::where('uuid', $this->player->uuid)->count();
        $this->bans = Punishment::whereIn('type', [1, 2, 3, 4, 5, 6, 7, 8])
            ->where('uuid', $this->player->uuid)
            ->orderBy('id', 'DESC')->get();
        $this->mutes = Punishment::whereIn('type', [9, 10, 11, 12, 13, 14, 15, 16])
            ->where('uuid', $this->player->uuid)
            ->orderBy('id', 'DESC')->get();
        $this->kicks = Punishment::whereIn('type', [17, 18])
            ->where('uuid', $this->player->uuid)
            ->orderBy('id', 'DESC')->get();
        $this->warns = Punishment::where('type', 19)
            ->where('uuid', $this->player->uuid)
            ->orderBy('id', 'DESC')->get();
    }

    public function render(): View {
        return view('livewire.show-player')->with('player', $this->player);
    }
}
