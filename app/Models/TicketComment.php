<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id',
        'employee_id',
        'comment',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
