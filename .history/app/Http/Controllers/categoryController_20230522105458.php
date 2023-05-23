<?php

namespace App\Http\Controllers;

use App\Models\ThuongHieu;
 

class categoryController extends Controller
{
    public function index(){
        $Thuonghieu = ThuongHieu::all();
        return view('index',['Thuonghieu'=>$Thuonghieu]);
    }
    
}