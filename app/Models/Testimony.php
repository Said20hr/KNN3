<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    use HasFactory;

    public $fillable = ['user_id','message','status'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
