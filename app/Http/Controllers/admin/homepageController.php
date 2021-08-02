<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Investissement;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_count = $users = User::where('role_id',null)->get()->count();

        $users_inv = User::where('role_id',null)->get();

        $users_inv = $users_inv->sortByDesc(function ($users_inv) {
            return $users_inv->invest->sum('price');
        });


        $invest_count = Investissement::all()->sum('price');
        $july = Investissement::whereMonth('created_at', '=','7')->sum('price')/1000;
        $profit_count =Investissement::all()->sum('profit');

        $user_this_month = User::whereMonth('created_at', '=',Carbon::now()->month)->count();
        $invest_month = Investissement::whereMonth('created_at', '=',Carbon::now()->month)->sum('price');
        $invest_last_month = Investissement::whereMonth('created_at', '=',Carbon::now()->month-1)->sum('price');
        $profit_month = Investissement::whereMonth('created_at', '=',Carbon::now()->month)->sum('profit');
        $profit_last_month = Investissement::whereMonth('created_at', '=',Carbon::now()->month-1)->sum('profit');
       if ($invest_last_month == 0)
       {
           $progress= 100;
       } else
       {
           $progress = $invest_month*100/$invest_last_month;
       }
       if ($profit_last_month == 0)
        {
            $progress_win= 100;
        } else
        {
            $progress_win = $profit_month*100/$profit_last_month;
        }
       return view('admin.dashboard')->with([
           'user_count'=>$user_count,
           'invest_count'=>$invest_count,
           'profit_count'=>$profit_count,
           'profit_count'=>$profit_count,
           'july'=>$july,
           'user_this_month'=>$user_this_month,
           'progress'=>$progress,
           'progress_win'=>$progress_win,
           'users_inv'=>$users_inv,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
