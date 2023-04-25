<?php

namespace HexGad\Templates\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Template extends Model
{
    use HasFactory;

    protected $casts = ['is_default' => 'boolean'];

    protected $fillable = [
        'name', 'is_default'
    ];
}
