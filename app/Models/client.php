<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
       
    ];

    protected $hidden = [
        'codigo',
        
    ];

    protected $casts = [
        'City' => 'integer',
        'name' => 'string',
    ];
    
}
