<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;
    protected $table = 'tb1_catalogue';
    protected $primaryKey = 'id';
    protected $fillable = [
        'file',
        'status',
        'crm_id',
        'created_at',
        'updated_at',
    ];
}
