<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    protected $fillable = [
        'created_id',
        'parent_meeting_id',
        'start_date',
        'start_time',
        'end_date',
        'end_time',
        'location',
        'department_id',
        'subject',
        'type',
        'registered',
        'out_att_name',
        'out_att_email',
        'user_id',
        'description',
        'audio',
        'scanned',
        'meeting_allowed',
        'updated_log',
        'meeting_number',
    ];

    public function department()
    {
       return $this->belongsTo(Department::class);
    }

    public function user()
    {
        return $this->belongsTo(\Illuminate\Foundation\Auth\User::class);
    }

    public function meetingFiles()
    {
        return $this->hasMany(MeetingFile::class);
    }
}
