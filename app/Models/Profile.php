<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    
    public static $rules = [
        'name' => 'required|string|max:255',
        'gender' => 'required|in:male,female',
        'hobby' => 'nullable|string|max:255',
        'introduction' => 'nullable|string|max:500',
        ];
     protected $fillable = ['name', 'gender', 'hobby', 'introduction'];
     
    public function histories()
  {
    return $this->hasMany(ProfileHistory::class);
  }

}
