<?php

namespace App\Http\Livewire;

use App\Models\Punishment;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ShowMutes extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    public string $search = '';

    public function render(): View
    {
        $mutes = Punishment::whereIn('type', [9, 10, 11, 12, 13, 14, 15, 16])
            ->where('reason', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.mutes')->with('mutes', $mutes);
    }
}
