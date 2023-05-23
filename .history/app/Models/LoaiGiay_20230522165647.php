<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiGiay extends Model
{
    use HasFactory;
    protected $table = 'category_product';
    protected $primaryKey = "idloaigiay";
    protected $fillable = ['category_product'];
    public $timestamps = false;

}