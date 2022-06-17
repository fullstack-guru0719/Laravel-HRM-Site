<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_order_id',
        'file_name',
        'file_path',
        'updated_log',
        'order_file_allowed',
    ];

    public function workOrder()
    {
        return $this->belongsTo(WorkOrder::class);
    }
}
