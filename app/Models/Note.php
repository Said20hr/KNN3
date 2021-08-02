<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table ='notes';

    protected $fillable=['title' , 'text', 'vote', 'image'];

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
    public function agreedVote()
    {
        return $this->belongsToMany('App\Models\User')->where('vote',true);
    }
    public function disagreedVote()
    {
        return $this->belongsToMany('App\Models\User')->where('vote',false);
    }
}
