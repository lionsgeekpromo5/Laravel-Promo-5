<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //  - **Name** (text input) 
//   - **Email** (email input)    - **Message** (text input)
//   - **Phone Number** (number input)
//   - **Email Priority** (select input with options)
protected $fillable = [ 
    'name',
    'phone',
    'email',
    'message',
    'email_priority',
    'is_read'
];

}
