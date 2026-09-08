<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BoardMember extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'board_members';
    protected $primarykey = 'id';
    protected $fillable = [
        'title',
        'designation',
        'description',
        'alt_tag',
        'image',
        'status',
    ];
    protected $dates = ['deleted_at'];

} 