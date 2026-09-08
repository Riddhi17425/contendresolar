<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HiroSection extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'hiro_section';
    protected $primarykey = 'id';
    protected $fillable = [
        'title',
        'sub_title',
        'short_description',
        'long_description',
        'page_name',
        'image',
        'status',
        'label',
    ];
    protected $dates = ['deleted_at'];

} 