<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'file_name',
        'file_path',
        'updated_log',
        'project_file_allowed',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
