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
    public function save_Movie(Request $request){
        if($request ->has('HinhAnh')){
            $file =$request->HinhAnh;
            $file_name=$file->getClientOriginalName();
            $file->move(base_path('/public/images'),$file_name);
        }
        if($request ->has('Trailer')){
            $file =$request->Trailer;
            $file_namee=$file->getClientOriginalName();
            $file->move(base_path('/public/trailer'),$file_namee);
        }
        $data =array();
        $data['IDPhim']=$request->IDPhim; 
        $data['TenPhim']=$request->TenPhim;
        $data['TenTheLoai']=$request->TenTheLoai;
        $data['ThoiLuong']=$request->ThoiLuong;
        $data['Gia']=$request->Gia;
        $data['KhoiChieu']=$request->KhoiChieu;
        $data['Mota']=$request->Mota;
        $data['HinhAnh']= $file_name;
        $data['Trailer']= $file_namee;
        DB::table('phim')->insert($data);
        Session::put('message','Thêm Phim thành công');
        return Redirect::to('movieMovie');
    }
}