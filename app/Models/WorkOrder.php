<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    use HasFactory;


    protected $fillable = [
        'created_id',
        'bill_to',
        'phone_number',
        'address',
        'work_order',
        'city',
        'order_taken_by',
        'email',
        'ref',
        'start_date',
        'start_time',
        'end_date',
        'end_time',
        'work_type',
        'tech_name',
        'description',
        'signature',
        'work_order_allowed',
        'updated_log',
        'order_number',
    ];

    public function orderFiles()
    {
        return $this->hasMany(OrderFile::class);
    }
}
