<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Jetstream\HasProfilePhoto;

class Pack extends Model
{
    use HasFactory;
    use HasProfilePhoto;

    protected $table ='packs';

    protected $fillable=['name' , 'low_price', 'high_price', 'percent','image'];
}
