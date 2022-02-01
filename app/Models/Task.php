<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'name',
        'start_date',
        'due_date',
        'estimated_hour',
        'description',
        'progress',
        'status',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
