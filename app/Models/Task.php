<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'created_id',
        't_number',
        't_title',
        'department_id',
        'user_id',
        't_priority',
        'start_date',
        'end_date',
        'description',
        'attachment',
        'status',
        'task_allowed',
        'updated_log',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function user()
    {
        return $this->belongsTo(\Illuminate\Foundation\Auth\User::class);
    }

    public function taskFiles()
    {
        return $this->hasMany(TaskFile::class);
    }
}
