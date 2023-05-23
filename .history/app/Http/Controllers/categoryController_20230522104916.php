<?php

namespace App\Http\Controllers;

use App\Models\ThuongHieu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class categoryController extends BaseController
{
    public function index(){
        $Thuonghieu = ThuongHieu::all();
        return view('index',['Thuonghieu'=>$Thuonghieu]);
    }
    use AuthorizesRequests, ValidatesRequests;
}