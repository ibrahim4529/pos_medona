<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable =[
        'description','type', 'outlet_id'
    ];
}
