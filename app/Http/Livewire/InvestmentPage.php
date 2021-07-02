<?php

namespace App\Http\Livewire;

use App\Models\Investissement;
use App\Models\User;
use Livewire\Component;

class InvestmentPage extends Component
{
    public $investment;

    public function mount($investment)
    {
        $this->investment = Investissement::find($investment);
    }
    public function render()
    {
        $invest = $this->investment;
        return view('livewire.investment-page',compact('invest'));
    }
}
