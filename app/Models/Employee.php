<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'post', 'salary', 'description', 'image', 'facebook_link', 'instagam_link', 'email', 'phone'];
}
