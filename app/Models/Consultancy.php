<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultancy extends Model
{
    use HasFactory;

    protected $table = 'consultancy_request';
    protected $primarykey = 'id';
    
    protected $fillable = [
        'name', 'phone', 'email', 'kilowatt', 'query', 'city'
    ];
}
