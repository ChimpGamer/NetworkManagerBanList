<?php

namespace App\Livewire;

use App\Models\Punishment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ShowKicks extends Component
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
        $hideSilent = config('hide_silent_punishments');

        $kicks = Punishment::join('players', 'punishments.uuid', 'players.uuid')
            ->select('punishments.*', 'players.username')
            ->whereIn('type', [17, 18])
            ->where(function (Builder $query) {
                $query->where('players.username', 'like', '%' . $this->search . '%')
                    ->orWhere('reason', 'like', '%' . $this->search . '%');
            });

        if ($hideSilent) {
            $kicks = $kicks->where('silent', false);
        }

        $kicks = $kicks->orderBy('id', 'DESC')->paginate($this->per_page);
        return view('livewire.kicks')->with('kicks', $kicks);
    }
}
