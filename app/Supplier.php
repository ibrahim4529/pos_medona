<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', 'address', 'phone', 'email', 'outlet_id'
    ];
}
