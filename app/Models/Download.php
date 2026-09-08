<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Download extends Model
{ 
    use SoftDeletes;
    use HasFactory;

    protected $table = 'download'; 
    protected $primaryKey = 'id';   // 🔹 fix casing too
    protected $dates = ['deleted_at'];
}
