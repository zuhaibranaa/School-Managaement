<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class status extends Model
{
    use HasFactory;
    public function properties()
    {
        return $this->hasMany('course');
    }
}
