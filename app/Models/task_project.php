<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task_project extends Model
{
    protected $fillable = [
        'user_id',
        'project_id',
    ];
}