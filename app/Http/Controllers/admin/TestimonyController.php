<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use App\Models\User;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimony = Testimony::all();

        return view('admin.testimonies.index',compact('testimony'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
       return view('admin.testimonies.create',compact('users'));
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
            'user' => ['required', 'numeric'],
            'message' => ['required', 'string'],
            'state' => ['required'],
        ]);
        if ($request->state == 'on')
        {
            $etat = true;
        }
        else
        {
            $etat = false;
        }
        $testi =  Testimony::create([
            'status'=> $etat,
            'user_id' => $request->user,
            'message' => $request->message,
        ]);
        $user = \App\Models\User::find($request->user);
        $testi->user()->associate($user);

        return redirect()->route('testimony.index')->with('success_message','تمت الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimony = Testimony::findOrFail($id);
        $edit = false;
        return view('admin.testimonies.edit-show',compact('edit','testimony'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimony = Testimony::find($id);
        $users = User::all();
        $edit = true;
        return view('admin.testimonies.edit-show',compact('edit','testimony','users'));
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
            'user' => ['required', 'numeric'],
            'message' => ['required', 'string'],
            'state' => ['required'],
        ]);
        if ($request->state == 'on')
        {
            $etat = true;
        }
        else
        {
            $etat = false;
        }
        $testi =  Testimony::findOrfail($id);
            $testi->status = $etat;
            $testi->user_id = $request->user;
            $testi->message = $request->message;
            $testi->save();
            $user = User::findOrfail($request->user);

        $testi->user()->associate($user);

        return redirect()->route('testimony.index')->with('success_message','تمت التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testi = Testimony::findOrFail($id);
        if($testi){
            $testi->delete();
        }
        return redirect()->route('testimony.index')->with('error_message','تم الحذف بنجاح');
    }
}
