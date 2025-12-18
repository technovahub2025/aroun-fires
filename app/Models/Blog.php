<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'tb1_blog';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image',
        'content',
        'title',
        'url',
        'status',
        'crm_id',
        'created_at',
        'updated_at',
    ];
}
