<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'subject',
        'nature',
        'location',
        'sponsored_by',
        'organized_by',
        'from',
        'to',
        'description',
    ];
}
