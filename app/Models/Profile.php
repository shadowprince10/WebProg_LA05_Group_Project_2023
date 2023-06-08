<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// attribute: profileID (primary key), profileUsername, profileEmail, profilePassword, profileAddress, profilePhone, userID (foreign key)
class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';
    public $fillable = ['profileUsername', 'profileEmail', 'profilePassword', 'profileAddress', 'profilePhone'];
}
