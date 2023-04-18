<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'order',
        'user_id',
        'created_at',
        'updated_at',
    ];
}
