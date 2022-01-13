<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'name',
        'email',
        'phone',
        'about',
        'status',
        'resume',
    ];

    public function job()
    {
        return $this->belongsTo(Jobs::class);
    }
}
