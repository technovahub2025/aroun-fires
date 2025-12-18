<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainProduct extends Model
{
    use HasFactory;
    protected $table = 'tb1_mainproduct';
    protected $primaryKey = 'id';
    protected $fillable = [
        'product_name',
        'description',
        'image',
        'status',
        'crm_id',
        'created_at',
        'updated_at',
    ];
}
