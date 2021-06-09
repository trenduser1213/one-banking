<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender',
        'receiver',
        'date',
        'amount',
        'description',
        'email_receiver',
        'receiver_bank_type',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
