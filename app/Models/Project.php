<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'created_id',
        'parent_project_id',
        'p_number',
        'p_title',
        'department_id',
        'p_priority',
        'client',
        'p_price',
        'user_id',
        'start_date',
        'end_date',
        'description',
        'audio',
        'upload_file_path',
        'project_allowed',
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

    public function projectFiles()
    {
        return $this->hasMany(ProjectFile::class);
    }
}
