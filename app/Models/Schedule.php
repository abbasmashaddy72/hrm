<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'shift_id',
        'name',
        'start',
        'end',
    ];

    protected $casts = [
        'working_days' => 'array',
        'selected_employee' => 'array',
    ];

    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }
}
