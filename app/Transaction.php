<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'invoice', 'description', 'note',
        'total_price', 'discount', 'final_price', 'cash',
        'change'
    ];
}
