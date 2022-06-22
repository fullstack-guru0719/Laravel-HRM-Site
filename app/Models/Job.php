<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $fillable = [
        'created_id',
        'job_number',
        'company_name',
        'job_position',
        'job_category',
        'job_type',
        'gender',
        'no_of_vacancy',
        'experiences',
        'posted_date',
        'last_apply_date',
        'close_date',
        'city',
        'state',
        'country',
        'education_level',
        'description',
        'salary_type',
        'salary_amount',
        'status',
        'job_allowed',
        'updated_log'
    ];

    public function jobUsers()
    {
        return $this->hasMany(JobUser::class);
    }
}

