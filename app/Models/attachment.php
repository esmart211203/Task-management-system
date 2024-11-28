<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attachment extends Model
{
    //
    protected $fillable = [
        'task_id',
        'file_path',
    ];
}
