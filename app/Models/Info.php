<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'info',
        'email',
        'facebook',
        'instagram',
        'linkedin',
        'created_at',
        'updated_at' 
    ];
}
