<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'products';
    protected $primarykey = 'id';
    protected $fillable = [
        'title',
        'sub_title',
        'short_description',
        'url',
        'image',
        'status',
        'maximum_efficiency',
        'maximum_power_output',
        'positive_power_tolerance',
        'cells_guaranted',
        'banner_title',
        'banner_image',
        'banner_description',
        'meta_title',
        'meta_description',
        'keyfeature_id',
    ];
    protected $dates = ['deleted_at'];
    public function keyfeature()
    {
        return $this->belongsTo(KeyFeature::class, 'keyfeature_id');
    }

} 