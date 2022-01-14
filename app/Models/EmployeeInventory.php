<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'inventory_id',
        'employee_id',
        'description',
        'status',
    ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
