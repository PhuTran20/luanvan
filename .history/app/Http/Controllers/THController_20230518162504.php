<?php

namespace App\Http\Controllers;

use App\Models\ThuongHieu;
use Illuminate\Http\Request;

class THController extends Controller
{
    public function index(){
        $Thuonghieu = ThuongHieu::all();
        return view('/components.navbar',['Thuonghieu'=>$Thuonghieu]);
    }
}