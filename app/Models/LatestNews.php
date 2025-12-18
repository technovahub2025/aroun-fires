<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{
    use HasFactory;
    protected $table = 'tb1_latest_news';
    protected $primaryKey = 'id';
    protected $fillable = [
        'message',
        'status',
        'crm_id',
        'created_at',
        'updated_at',
    ];
}
