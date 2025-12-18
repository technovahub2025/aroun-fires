<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'tb1_category';
    protected $primaryKey = 'id';
    protected $fillable = [
        'category',
        'status',
        'crm_id',
        'created_at',
        'updated_at',
    ];
}
