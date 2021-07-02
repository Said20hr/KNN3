<?php

namespace App\Http\Livewire;

use App\Models\message;
use App\Models\User;
use Livewire\Component;

class MessagePage extends Component
{

    public $message;

    public function mount($message)
    {
        $this->message =message::find($message);

    }
    public function render()
    {
        $message = $this->message;
        return view('livewire.message-page',
        ['message'=>$message]);
    }
}
