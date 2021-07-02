<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;

    protected $fillable=['reply','message','subject','user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
