<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'role_permission_id',
        'name',
        'status',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function rolePermission()
    {
        return $this->belongsTo(RolePermissions::class);
    }
}
