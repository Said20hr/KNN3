<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Investissement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class usersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role_id',null)->get();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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
            'lastname' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'job' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'country' => ['required', 'string', 'max:255'],
            'place' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric','unique:users'],
            'image' => ['required','image','mimes:jpeg,png,jpg,gif,svg|max:512'],
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
        $user =  User::create([
            'password' => Hash::make('password'),
            'status'=> $etat,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birth_date' => $request->date,
            'job' => $request->job,
            'address' =>$request->address,
            'country' =>$request->country,
            'birth_place' => $request->place,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        if ($request->image) {
            $img=  $request->image;
            $user->updateProfilePhoto($img);
        }


        return redirect()->route('users.index')->with('success_message','تمت اضافة المستثمر بنجاح');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $edit = false;
        return view('admin.users.edit-show',compact('user','edit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $edit = true;
        return view('admin.users.edit-show',compact('user','edit'));
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
        $user = User::findOrFail($id);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'job' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'country' => ['required', 'string', 'max:255'],
            'place' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',Rule::unique('users')->ignore($user->id)],
            'phone' => ['required', 'numeric', Rule::unique('users')->ignore($user->id)],
            'image' =>['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
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


        $user->status= $etat;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->birth_date = $request->date;
        $user->birth_place = $request->place;
        $user->job = $request->job;
        $user->address =$request->address;
        $user->country =$request->country;

        if ($request->image) {
            $user->updateProfilePhoto($request->image);
        }
        $user->save();

        return redirect()->back()->with('success_message','تمت اضافة المستثمر بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        //ameliorate
        $investissement = Investissement::where('user_id',$id)->get();

        foreach ($investissement as $invest)
        {
            $invest->delete();
        }
        if($user){
            $user->delete();
        }
        return redirect()->route('users.index')->with('error_message','تم حذف المستثمر بنجاح');

    }
}
