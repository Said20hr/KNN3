<?php

namespace App\Http\Livewire;

use App\Models\message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MessageCreate extends Component
{
    public $subject;
    public $message;

    protected $rules = [
        'message' => 'required|string',
        'subject' => 'required|string',
    ];
    public function updated($propertyName) {

        $this->validateOnly($propertyName);
    }
    public function submit() {

        $validatedData = $this->validate();


        $user = Auth::user();
        $exist = message::where('user_id',$user->id)->whereNotNull('reply')->first();
        if($exist)
        {
            session()->flash('error_message','لقد قمت بارسال رسالة من قبل , لا يمكنك ارسال اي رسالة الا بعد ان يتم الرد على رسالتك الاولى');
            return redirect()->to('/user/messages');
        }
        else
        {
            $this->message = message::create([
                'user_id' =>$user->id,
                'message' =>$this->message,
                'subject' =>$this->subject,
            ]);
            session()->flash('success_message','تم الارسال بنجاح , سيتم الرد على رسالتكم في اقرب الاجال');
            return redirect()->to('/user/messages');
        }


    }
    public function render()
    {
        return view('livewire.message-create');
    }
}
