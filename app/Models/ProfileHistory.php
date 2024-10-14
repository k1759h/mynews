<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
    protected $fillable = ['profile_id', 'name', 'gender', 'hobby', 'introduction', 'edited_at'];
    
    use HasFactory;
}
