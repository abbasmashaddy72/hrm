<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'position',
        'type',
        'experience',
        'location',
        'salary_range',
        'short_description',
        'description',
        'apply_date',
        'close_date',
        'status',
    ];
}
