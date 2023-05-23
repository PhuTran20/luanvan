<?php

namespace App\Http\Controllers;

use App\Models\LoaiGiay;
use App\Models\Product;
use App\Models\ThuongHieu;
use Illuminate\Http\Request;
use DB;
use Session;


use Illuminate\Support\Facades\Redirect;
 
class ThuongHieuController extends Controller
{
    public function index(){
        $Thuonghieu = ThuongHieu::all();
        $Loaigiay =   LoaiGiay::all();
        $Product = Product::all();
        return view('index',['Thuonghieu'=>$Thuonghieu,
        'Loaigiay'=>$Loaigiay,
        'Product'=>$Product]);
    }
    public function indexshop(){
        $Thuonghieu = ThuongHieu::all();
        $Loaigiay =   LoaiGiay::all();
        return view('shop',['Thuonghieu'=>$Thuonghieu,'Loaigiay'=>$Loaigiay]);
    }
    public function indexcart(){
        $Thuonghieu = ThuongHieu::all();
        $Loaigiay =   LoaiGiay::all();
        return view('cart',['Thuonghieu'=>$Thuonghieu,'Loaigiay'=>$Loaigiay]);
    }
    public function indexdetail(){
        $Thuonghieu = ThuongHieu::all();
        $Loaigiay =   LoaiGiay::all();
        return view('detail',['Thuonghieu'=>$Thuonghieu,'Loaigiay'=>$Loaigiay]);
    }
    public function indexcontact(){
        $Thuonghieu = ThuongHieu::all();
        $Loaigiay =   LoaiGiay::all();
        return view('contact',['Thuonghieu'=>$Thuonghieu,'Loaigiay'=>$Loaigiay]);
    }
    public function indexcheckout(){
        $Thuonghieu = ThuongHieu::all();
        $Loaigiay =   LoaiGiay::all();
        return view('checkout',['Thuonghieu'=>$Thuonghieu,'Loaigiay'=>$Loaigiay]);
    }
    public function add_ThuongHieu(){
        return view('/admin.addThuongHieu');
    }
    public function all_ThuongHieu(){
        $all_ThuongHieu=DB::table('thuonghieu')->get();
        $manager_Category=view('/quanli_thuonghieu')->with('/quanli_thuonghieu',$all_ThuongHieu);
        return view('quanli_thuonghieu')->with('all_ThuongHieu',$all_ThuongHieu);
    }
    public function save_ThuongHieu(Request $request){
        $data =array();
        $data['idthuonghieu']=$request->idthuonghieu;
        $data['tenthuonghieu']=$request->tenthuonghieu;
        DB::table('thuonghieu')->insert($data);
        Session::put('message','Thêm thương hiệu thành công');
        return Redirect::to('quanli_thuonghieu');
    }
    public function edit_ThuongHieu($idthuonghieu){
        $edit_ThuongHieu=DB::table('thuonghieu')->where('idthuonghieu',$idthuonghieu)->get();
        $manager_User=view('/admin.editThuongHieu')->with('/admin.editThuongHieu',$edit_ThuongHieu);
        return view('admin.editThuongHieu')->with('edit_ThuongHieu',$edit_ThuongHieu);
    }
    



    public function update_ThuongHieu(Request $request){
        $data =array();
        $data['idthuonghieu']=$request->idthuonghieu;
        $data['tenthuonghieu']=$request->tenthuonghieu;
        DB::table('thuonghieu')->where('idthuonghieu',$request->idthuonghieu)->update($data);
        Session::put('message','Cập nhật thương hiệu thành công');
        return Redirect::to('quanli_thuonghieu');
    }
    public function delete_ThuongHieu($idthuonghieu){
        DB::table('thuonghieu')->where('idthuonghieu',$idthuonghieu)->delete();
        Session::put('message','Xóa thương hiệu thành công');
        return Redirect::to('quanli_thuonghieu');
    }
}