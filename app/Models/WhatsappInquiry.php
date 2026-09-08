<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhatsappInquiry extends Model
{
    protected $table = 'whatsapp_inquiries';

    protected $fillable = ['number', 'message'];
}
