<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes =  Note::all();
        return view('admin.notes.index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notes.created');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'vote' => ['required'],
            'text' => ['required'],
            'image' => ['required','image','mimes:jpeg,png,jpg,gif,svg|max:512'],
        ]);
        if ($request->vote == 'on')
        {
            $vote = true;
        }
        else
        {
            $vote = false;
        }

        $note =  Note::create([
            'title' => $request->title,
            'text' => $request->text,
            'vote' => $vote,
            'image' => $request->image ? $this->uploadImagesArray($request->image) :'filled',
        ]);



        return redirect()->route('note.index')->with('success_message','تمت اضافة الخبر بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $edit = false;
        $note = Note::findOrFail($id);
        return view('admin.notes.edit-show',compact('note','edit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = true;
        $note = Note::findOrFail($id);
        return view('admin.notes.edit-show',compact('note','edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'vote' => ['required'],
            'text' => ['required','string'],
            'image' => ['image','mimes:jpeg,png,jpg,gif,svg|max:512'],
        ]);
        if ($request->vote == 'on')
        {
            $vote = true;
        }
        else
        {
            $vote = false;
        }
        $note =  Note::findOrFail($id);


        $note->title = $request->title;
        $note->text = $request->text;
        $note->vote = $vote;
        if ($request->image)
        {
            $note->image = $this->uploadImagesArray($request->image);
        }
        $note->save();

        return redirect()->route('note.index')->with('success_message','تمت تعديل الخبر بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    private function uploadImagesArray($image)
    {
        $extension = $image->getClientOriginalName();
        $name = time() . '.' . $extension;
        $image->move('storage/'. 'notes/' .'/', $name);
        return  $name;
    }
    public function destroy($id)
     {
         $note = Note::findOrFail($id);
         if($note){
             $note->delete();
         }
         return redirect()->route('packs.index')->with('error_message','تم حذف الخبر بنجاح');
     }
}
