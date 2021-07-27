<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\status;

class Course extends Model
{
    use HasFactory;
    public function statuses()
    {
        return $this->hasOne('status');
    }
}
