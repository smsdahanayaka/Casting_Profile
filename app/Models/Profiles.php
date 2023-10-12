<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;
    protected $table = 'Profiles';
    protected $fillable = [
        'profile_pic',
        'image_1',
        'image_2',
        'first_name',
        'last_name',
        'personal_ID',
        'username',
        'gender',
        'date_of_birth',
        'date_of_birth_month',
        'date_of_birth_date',
        'mobile_number',
        'whatsapp_number',
        'email',
        'home_town',
        'height',
        'hair_color',
        'eye_color',
        'shoe_size',
        'pants_size',
        'top_size',
        'dress_size',
        'action_experience',
        'special_skills',
        'ads_films_tv_shows',
        'facebook',
        'instagram',
        'tiktok',
        'youtube',
        'remark',
        'status',
        'pasword'
    ];

}
