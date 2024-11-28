<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User; 
class task extends Model
{
    protected $with = ['user']; // để luôn tải thông tin của user khi xuất tasks
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
        'priority',
        'due_date',
    ];
    /**
     * Relationship: Task belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
