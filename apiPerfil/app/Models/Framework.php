<?php

// Framework.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    protected $fillable = ['Name', 'Level', 'Year', 'Profile_id'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
