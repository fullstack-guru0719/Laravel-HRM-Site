<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmphotoFile extends Model
{
    use HasFactory;
    protected $table = 'emphoto_files';
    protected $fillable = [
        'employee_id',
        'file_name',
        'file_path',
        'updated_log'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

}
