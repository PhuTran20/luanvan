<?php

namespace App\Http\Controllers;

use App\Models\ThuongHieu;
use Illuminate\Http\Request;
use DB;
use Session;
 

use Illuminate\Support\Facades\Redirect;
session_start();
class LoaiGiayController extends Controller
{
 
    public function add_LoaiGiay(){
        $ThuongHieu= ThuongHieu::all();
        return view('/admin.addLoaiGiay',compact('ThuongHieu'));
    }
    public function all_LoaiGiay(){
        $all_LoaiGiay=DB::table('category_product')->get();
        $manager_Movie=view('/quanli_loaigiay')->with('/quanli_loaigiay',$all_LoaiGiay);
        return view('quanli_loaigiay')->with('all_LoaiGiay',$all_LoaiGiay);
    }
    public function save_LoaiGiay(Request $request){
 
        $data =array();
        $data['idloaigiay']=$request->idloaigiay; 
        $data['tenthuonghieu']=$request->tenthuonghieu;
        $data['name_category']=$request->name_category;
 
        DB::table('category_product')->insert($data);
        Session::put('message','Thêm Loại Giày thành công');
        return Redirect::to('quanli_loaigiay');
    }
}