<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'meeting_id',
        'file_name',
        'file_path',
        'updated_log',
        'meeting_file_allowed',
    ];

    public function meeting()
    {
        return $this->belongsTo(Meeting::class);
    }
}
