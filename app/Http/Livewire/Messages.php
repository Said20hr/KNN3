<?php

namespace App\Http\Livewire;

use App\Models\message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Messages extends Component
{
    public $messages =[];

    public function mount()
    {
        if (Auth::user()){
            $user=Auth::user();
            $this->messages = message::where('user_id',$user->id)->get();
        }

    }
    public function destroy($message)
    {
        $message = message::find($message);
        if($message){
            $message->delete();
        }
        session()->flash('success_message','تم حذف الرسالة بنجاح');
        return redirect()->to('/user/messages');
    }

    public function render()
    {
        return view('livewire.messages', [
             'messages' => $this->messages,
         ]);
    }
}
