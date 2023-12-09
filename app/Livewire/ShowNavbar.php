<?php

namespace App\Livewire;

use App\Models\Punishment;
use Illuminate\View\View;
use Livewire\Component;

class ShowNavbar extends Component
{

    private function getTotalBans(): int
    {
        return Punishment::whereIn('type', [1, 2, 3, 4, 5, 6, 7, 8])->count();
    }

    private function getTotalMutes(): int
    {
        return Punishment::whereIn('type', [9, 10, 11, 12, 13, 14, 15, 16])->count();
    }

    private function getTotalKicks(): int
    {
        return Punishment::whereIn('type', [17, 18])->count();
    }

    private function getTotalWarns(): int
    {
        return Punishment::where('type', 19)->count();
    }

    public function render(): View
    {
        return view('livewire.app.navbar')
            ->with('total_bans', $this->getTotalBans())
            ->with('total_mutes', $this->getTotalMutes())
            ->with('total_kicks', $this->getTotalKicks())
            ->with('total_warns', $this->getTotalWarns());
    }
}
