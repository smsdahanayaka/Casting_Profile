<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{

    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'profile_pic',
        'first_name',
        'last_name',
        'username',
        'gender',
        'date_of_birth',
        'age',
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

    // ... other model properties and methods ...

    /**
     * Check if the user is an admin.
     *
     * @return bool
     */
    public function isAdmin()
    {
        // You can implement your own logic here to determine if the user is an admin.
        // For example, you might have a 'role' column in your users table to indicate the user's role.
        // Here, we'll assume that 'admin' is the role that identifies an admin user.
        return $this->role === 'admin';
    }
}
