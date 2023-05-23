<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function add_Movie(){
        $Theloai= Theloai::all();
        return view('/admin.movieAddMovie',compact('Theloai'));
    }
    public function all_Movie(){
        $all_Movie=DB::table('phim')->get();
        $manager_Movie=view('/movieMovie')->with('/movieMovie',$all_Movie);
        return view('movieMovie')->with('all_Movie',$all_Movie);
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
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}