<?php


// Profile.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['Name', 'Lastname', 'Email', 'City', 'Country', 'Summary'];

    public function frameworks()
    {
        return $this->hasMany(Framework::class);
    }

    public function hobbies()
    {
        return $this->hasMany(Hobbie::class);
    }
}
