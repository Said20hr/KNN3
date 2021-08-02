<?php

namespace App\Http\Livewire;

use App\Models\Note;
use App\Models\Notesvote;
use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotePage extends Component
{

    public $note;
    public $vote;
    public $voted;
    public $total;
    public $percent;


    protected $rules = [
        'vote' => 'required',
    ];

    public function mount($note)
    {
        $this->note = Note::findOrFail($note);
        $user=Auth::user()->id;
        $this->voted= Notesvote::where('user_id',$user)->where('note_id',$this->note->id)->first();
        $this->total= Notesvote::where('note_id',$this->note->id)->count();
        $this->percent= Notesvote::where('note_id',$this->note->id)->where('vote',true)->count();
    }

    public function submit()
    {
        $this->validate();
        $user = Auth::user()->id;

        if ($this->vote == 'on')
        {
            $vote=true;
        }
        else
        {
            $vote=false;
        }


        // Execution doesn't reach here if validation fails.

        $vote = Notesvote::create([
            'user_id' => $user,
            'note_id' => $this->note->id,
            'vote' => $vote,
        ]);
        session()->flash('error_message','لقد قمت بالتصويت');
        $this->emit('saved');
        $this->emitUp('Refresh');

    }
    public function render()
    {
        $note = $this->note;
        $voted = $this->voted;
        return view('livewire.note-page', [
            'note'=>$note,
            'voted'=>$voted,
            'percent'=>$this->percent,
            'total'=>$this->total,
                ]);
    }
}
