<?php

namespace App\Http\Livewire;

use App\Models\Punishment;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ShowKicks extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';

    public string $search = '';

    public function updated() {
        $this->resetPage();
    }

    public function render(): View
    {
        $kicks = Punishment::whereIn('type', [17, 18])
            ->where('reason', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.kicks')->with('kicks', $kicks);
    }
}
