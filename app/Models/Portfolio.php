<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = "portfolio";
    protected $guarded = [];

    protected $fillable = [
        'title',
        'images',
        'cover',
        'descrition',
        'category',
        'client',
        'created_at',
        'updated_at',
    ];
}
