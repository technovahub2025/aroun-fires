<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProduct extends Model
{
    use HasFactory;
    protected $table = 'tb1_subproduct';
    protected $primaryKey = 'id';
    protected $fillable = [
        'main_product_id',
        'name',
        'price',
        'description',
        'url',
        'image',
        'status',
        'crm_id',
        'created_at',
        'updated_at',
    ];
    public function mainproduct()
    {
        return $this->belongsTo(MainProduct::class, 'main_product_id', 'id');
    }
}
