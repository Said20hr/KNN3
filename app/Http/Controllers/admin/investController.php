<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Investissement;
use App\Models\Pack;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class investController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invesstissements = Investissement::all();
        return view('admin.investissments.index',compact('invesstissements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packs = Pack::all();
        $users = User::where('role_id',null)->get();
        return view('admin.investissments.create_user',compact('users','packs'));
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
            'pack' => ['required', 'numeric'],
            'price' => ['required',  'numeric'],
            'profit' => ['required',  'numeric'],
            'state' => ['required','string'],
        ]);
        if ($request->state == 'on')
        {
            $etat = true;
        }
        else
        {
            $etat = false;
        }
        $inv =  \App\Models\Investissement::create([
            'status'=> $etat,
            'user_id' => $request->user,
            'pack_id' => $request->pack,
            'price' => $request->price,
            'profit' => $request->profit,
        ]);
        $user = \App\Models\User::findOrfail($request->user);
        $inv->user()->associate($user);

        return redirect()->route('investissements.index')->with('success_message','تمت اضافة الاستثمار بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $edit=false;
        $invest = Investissement::findOrFail($id);
        $packs = Pack::all();
        return view('admin.investissments.edit-show',compact('invest','packs','edit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=true;
        $invest = Investissement::findOrFail($id);
        $packs = Pack::all();
        return view('admin.investissments.edit-show',compact('invest','packs','edit'));
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
            'pack' => ['required', 'numeric'],
            'price' => ['required',  'numeric'],
            'profit' => ['required',  'numeric'],
            'withdraw' => ['required',  'numeric'],
            'available' => ['required',  'numeric'],
            'substruct' => ['required',  'numeric'],
            'delayed' => ['required',  'numeric'],
            'state' => ['required','string'],
        ]);
        if ($request->state == 'on')
        {
            $etat = true;
        }
        else
        {
            $etat = false;
        }
        $inv = Investissement::findOrFail($id);
            $inv->status = $etat;
            $inv->pack_id = $request->pack;
            $inv->price = $request->price;
            $inv->profit = $request->profit;
            $inv->delayed = $request->delayed;
            $inv->withdraw = $request->withdraw;
            $inv->available = $request->available;
            $inv->substruct = $request->substruct;
            $inv->save();

        return redirect()->back()->with('success_message','تمت تعديل الاستثمار بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inve = Investissement::findOrFail($id);
        if($inve){
            $inve->delete();
        }
        return redirect()->route('investissements.index')->with('error_message','تم حذف الاستثمار بنجاح');
    }

    /**
     * @param $id
     */
    public function investCreate($id)
    {
        $user = \App\Models\User::findOrfail($id);
        $packs = Pack::all();
       return view('admin.investissments.create',compact('user','packs'));
    }
}
