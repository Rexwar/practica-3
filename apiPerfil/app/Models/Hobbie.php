<?php

// Hobbie.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hobbie extends Model
{
    protected $fillable = ['Name', 'Description', 'profile_id'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
