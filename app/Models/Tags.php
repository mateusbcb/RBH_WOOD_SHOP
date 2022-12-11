<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $table = "tags";

    protected $fillable = [
        'tag',
        'portfolio_id',
        'created_at',
        'updated_at',
    ];
}
