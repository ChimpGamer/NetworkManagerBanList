<?php

namespace App\Livewire;

use App\Models\Punishment;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Home extends Component
{
    public function render(): View|Factory|Application
    {
        $total_punishments = Punishment::count();
        return view('livewire.home')->with('total_punishments', $total_punishments);
    }
}
