<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{

    protected $fillable = [ 'name', 'email', 'phone', 'school', 'gender', 'english_level', 'campus', 'terms'];

    protected $casts = [
        'school' => 'array'
    ];
}
