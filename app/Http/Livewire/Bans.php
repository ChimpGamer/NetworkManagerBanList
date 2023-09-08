<?php

namespace App\Http\Livewire;

use App\Models\Punishment;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Bans extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    public string $search = '';

    public function updated() {
        $this->resetPage();
    }

    public function render(): View
    {
        $bans = Punishment::whereIn('type', [1, 2, 3, 4, 5, 6, 7, 8])
            ->where('reason', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.bans')->with('bans', $bans);
    }
}
