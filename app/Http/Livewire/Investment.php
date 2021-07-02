<?php

namespace App\Http\Livewire;

use App\Models\Investissement;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Investment extends Component
{

    public $investissment = [] ;

    public function mount()
    {
        $user = Auth::user()->id;
        $this->investissment = Investissement::where('user_id',$user)->get();
    }

    public function render()
    {
        return view('livewire.investment', [
            'investissment' => $this->investissment,
        ]);
    }

}
