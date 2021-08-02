<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pack;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class packsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packs = Pack::paginate(10);
       return view('admin.packs.index',compact('packs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packs.create');
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
            'name' => ['required', 'string', 'max:255'],
            'low' => ['required', 'numeric'],
            'high' => ['required', 'numeric'],
            'percent' => ['required', 'numeric'],
            'image' => ['required','image','mimes:jpeg,png,jpg,gif,svg|max:512'],
        ]);
        $pack =  Pack::create([
            'name' => $request->name,
            'low_price' => $request->low,
            'high_price' => $request->high,
            'percent' => $request->percent,
            'image' => 'filled',
            //'profile_photo_path' => $request->image,
        ]);
        $photo = $request->image;

        return redirect()->route('packs.index')->with('success_message','تمت اضافة الباقة بنجاح');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $edit =false;
        $pack = Pack::findOrFail($id);
        return view('admin.packs.edit-show',compact('pack','edit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit =true;
        $pack = Pack::findOrFail($id);
        return view('admin.packs.edit-show',compact('pack','edit'));
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
            'name' => ['required', 'string', 'max:255'],
            'low' => ['required', 'numeric'],
            'high' => ['required', 'numeric'],
            'percent' => ['required', 'numeric'],
            'image' => ['required','image','mimes:jpeg,png,jpg,gif,svg|max:512'],
        ]);
        $pack = Pack::findOrFail($id);

        $pack->name= $request->name;
        $pack->low_price= $request->low;
        $pack->high_price= $request->high;
        $pack->percent= $request->percent;
        //'image' => 'filled',
        $pack->save();
        return redirect()->back()->with('success_message','تمت تعديل الباقة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pack = Pack::findOrFail($id);
        if($pack){
            $pack->delete();
        }
        return redirect()->route('packs.index')->with('error_message','تم حذف الباقة بنجاح');
    }
}
