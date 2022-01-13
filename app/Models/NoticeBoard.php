<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeBoard extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'assigned_to',
        'assigned_by',
    ];

    public function assignedBy()
    {
        return $this->belongsTo(Employee::class);
    }
}
