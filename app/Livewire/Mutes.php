<?php

namespace App\Livewire;

use App\Models\Punishment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Mutes extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    public ?Punishment $punishment = null;

    public string $search = '';
    public int $per_page = 10;

    public function updated(): void
    {
        $this->resetPage();
    }

    public function showPunishment(Punishment $punishment): void
    {
        $this->punishment = $punishment;
    }

    public function render(): View
    {
        $hideSilent = config('app.hide_silent_punishments');

        $mutes = Punishment::join('players', 'punishments.uuid', 'players.uuid')
            ->select('punishments.*', 'players.username')
            ->whereIn('type', [9, 10, 11, 12, 13, 14, 15, 16])
            ->where(function (Builder $query) {
                $query->where('players.username', 'like', '%' . $this->search . '%')
                    ->orWhere('reason', 'like', '%' . $this->search . '%');
            });

        if ($hideSilent) {
            $mutes = $mutes->where('silent', false);
        }

        $mutes = $mutes->orderBy('id', 'DESC')->paginate($this->per_page);
        return view('livewire.mutes')->with('mutes', $mutes);
    }
}
