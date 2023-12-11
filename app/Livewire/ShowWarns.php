<?php

namespace App\Livewire;

use App\Models\Punishment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ShowWarns extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    public string $search = '';
    public int $per_page = 10;

    public function render(): View
    {
        $warns = Punishment::join('players', 'punishments.uuid', 'players.uuid')
            ->select('punishments.*', 'players.username')
            ->where('type', 19)
            ->where(function (Builder $query) {
                $query->where('players.username', 'like', '%' . $this->search . '%')
                    ->orWhere('reason', 'like', '%' . $this->search . '%');
            })
            ->orderBy('id', 'DESC')->paginate($this->per_page);
        return view('livewire.warns')->with('warns', $warns);
    }
}
