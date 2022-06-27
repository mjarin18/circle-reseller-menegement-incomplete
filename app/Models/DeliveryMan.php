<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryMan extends Model
{
    use HasFactory;

    protected $table = 'delivery_man';
    protected $fillable = [
        'name',
        'phone',
        'man_id',
    ];
}
