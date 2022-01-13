<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'vendor_name',
        'invoice_number',
        'bill_image',
        'price',
        'payment_mode',
        'stock',
        'defective',
        'trashed',
        'description',
    ];
}
