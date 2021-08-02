<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investissement extends Model
{
    use HasFactory;

    protected $fillable=['status' ,'delayed' ,'withdraw','available' ,'profit', 'price','substruct','pack_id' ,'user_id'];

    public function pack()
    {
        return $this->belongsTo('App\Models\Pack');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
