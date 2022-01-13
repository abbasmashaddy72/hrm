<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation_id',
        'role_permission_id',
        'user_id',
        'name',
        'gender',
        'photo',
        'phone',
        'email',
        'father_name',
        'mother_name',
        'date_of_birth',
        'present_address',
        'permanent_address',
        'date_of_joining',
        'date_of_reliving',
        'payment_type',
        'salary',
        'bank_name',
        'branch_name',
        'account_number',
        'ifsc_code',
        'pan_number',
        'aadhaar_number',
        'documents',
        'status',
    ];

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    public function rolePermissions()
    {
        return $this->belongsTo(RolePermissions::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
