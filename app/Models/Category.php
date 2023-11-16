<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    // department
    public function department()
    {
        return $this->belongsTo('App\Models\Department', 'department_id');
    }
}
