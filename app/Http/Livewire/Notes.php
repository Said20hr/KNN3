<?php

namespace App\Http\Livewire;

use App\Models\Investissement;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Notes extends Component
{
    use WithPagination;

    public $notes = [] ;

    public function mount()
    {

        $this->notes = Note::all();
    }

    public function render()
    {
        return view('livewire.notes', [
            'notes' =>$this->notes,
        ]);
    }
}
