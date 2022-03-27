<?php

namespace App\Http\Livewire;

use Livewire\Component;

class State extends Component
{

    public $active = 'crypto';

    public function switch($id)
    {
        if ($id == 1)
        {
            $this->active = "crypto";
        }
        else
        {
            $this->active = "etf";
        }
    }

    public function render()
    {
        return view('livewire.state');
    }


}
