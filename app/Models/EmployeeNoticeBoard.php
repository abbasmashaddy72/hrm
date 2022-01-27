<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeNoticeBoard extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'notice_board_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function noticeBoard()
    {
        return $this->belongsTo(NoticeBoard::class);
    }
}
