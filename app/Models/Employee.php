<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'user_id',
        'phone_number',
        'contact_number',
        'birthday',
        'gender',
        'marital_status',
        'blood_group',
        'email',
        'present_address',
        'permanent_address',
        'photo',
        'em_email',
        'em_password',
        'em_allowed',
        'updated_log'
    ];

    public function employeeFiles()
    {
        return $this->hasMany(EmployeeFile::class);
    }
}

