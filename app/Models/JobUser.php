<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'created_id',
        'job_user_number',
        'name',
        'email',
        'phone_number',
        'description',
        'resume_name',
        'resume_path',
        'status',
        'updated_log',
        'job_user_allowed'
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
