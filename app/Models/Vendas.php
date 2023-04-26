<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'vr_total',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
