<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admintbl extends Model
{
    use HasFactory;
    protected $table = 'admintbls';
    protected $fillable=[
        'userName',
        'password',
        'profileImage',
        'firstName',
        'lastName',
        'email',
        'mobileNumber',

    ];

}





