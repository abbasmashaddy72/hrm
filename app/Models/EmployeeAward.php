<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAward extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'award_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function award()
    {
        return $this->belongsTo(Award::class);
    }
}
