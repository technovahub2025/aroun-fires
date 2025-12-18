<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $table = 'tb1_enquiry';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'mobile',
        'comments',
        'product_name',
        'quantity',
        'status',
        'created_at',
        'updated_at',
    ];
}
