<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;
    public function Course()
    {
        return $this->hasMany('Course');
    }
    public function User()
    {
        return $this->hasMany('users');
    }
}
