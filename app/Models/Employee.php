<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'created_id',
        'first_name',
        'last_name',
        'phone_number',
        'contact_number',
        'birthday',
        'gender',
        'marital_status',
        'blood_group',
        'email',
        'present_address',
        'permanet_address',
        'photo',
        'em_email',
        'em_password',
        'em_number',
        'department_id',
        'designation',
        'join_date',
        'resignation_date',
        'termination_date',
        'credit_leaves',
        'salary_type',
        'salary_amount',
        'status',
        'em_allowed',
        'updated_log'
    ];

    public function employeeFiles()
    {
        return $this->hasMany(EmployeeFile::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}

