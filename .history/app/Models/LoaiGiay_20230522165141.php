<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThuongHieu extends Model
{
    use HasFactory;
    protected $table = 'category_product';
    protected $primaryKey = "idloaigiay";
    protected $fillable = ['tenthuonghieu','category_product'];
    public $timestamps = false;

}