<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermissions extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    protected $casts = [
        'permissions' => 'array',
    ];

    public function users()
    {
        return $this->HasMany(User::class);
    }
}
