<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'schedule_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
