<?php

namespace App\Livewire;

use App\Models\Punishment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ShowMutes extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    public ?Punishment $punishment = null;

    public string $search = '';
    public int $per_page = 10;

    public function updated() {
        $this->resetPage();
    }

    public function showPunishment(Punishment $punishment)
    {
        $this->punishment = $punishment;
    }

    public function render(): View
    {
        $mutes = Punishment::join('players', 'punishments.uuid', 'players.uuid')
            ->select('punishments.*', 'players.username')
            ->whereIn('type', [9, 10, 11, 12, 13, 14, 15, 16])
            ->where(function (Builder $query) {
                $query->where('players.username', 'like', '%' . $this->search . '%')
                    ->orWhere('reason', 'like', '%' . $this->search . '%');
            })
            ->orderBy('id', 'DESC')->paginate($this->per_page);
        return view('livewire.mutes')->with('mutes', $mutes);
    }
}
