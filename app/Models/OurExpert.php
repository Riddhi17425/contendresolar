<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class OurExpert extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'our_expert';
    protected $primarykey = 'id';
    protected $dates = ['deleted_at'];
}
