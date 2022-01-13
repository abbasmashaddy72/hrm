<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'date',
        'clock_in',
        'clock_out',
        'late',
        'early_leaving',
        'overtime',
        'status',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
