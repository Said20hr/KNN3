<?php

namespace App\Http\Livewire;

use App\Models\Investissement;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{

    public $packs_count ;
    public $invest_count ;
    public $profit_count ;
    public $withdraw_count ;
    public $delayed_count ;
    public $inavailable_count;
    public $substruct_count;
    public $available_count;

    public function mount()
    {
        $user = auth()->user()->id;
        //counting stats
        $this->packs_count = Investissement::where('user_id',$user)->count();
        $this->invest_count = Investissement::where('user_id',$user)->sum('price');
        $this->profit_count = Investissement::where('user_id',$user)->sum('profit');
        $this->available_count = Investissement::where('user_id',$user)->sum('available');
        $this->withdraw_count = Investissement::where('user_id',$user)->sum('withdraw');
        $this->delayed_count = Investissement::where('user_id',$user)->sum('delayed');
        $this->substruct_count = Investissement::where('user_id',$user)->sum('substruct');
        $this->inavailable_count = $this->profit_count - $this->withdraw_count;
    }

    public function render()
    {
        return view('dashboard',[
            'packs_count'=> $this->packs_count,
            'invest_count'=>$this->invest_count,
            'profit_count'=>$this->profit_count,
            'withdraw_count'=>$this->withdraw_count,
            'delayed_count'=>$this->delayed_count,
            'substruct_count'=>$this->substruct_count,
            'inavailable_count'=>$this->inavailable_count,
            'available_count'=>$this->available_count,
        ]);
    }
}
