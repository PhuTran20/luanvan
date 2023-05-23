<?php

namespace App\Http\Controllers;

use App\Models\LoaiGiay;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function add_Product(){
        $Loaigiay= LoaiGiay::all();
        return view('/admin.addProduct',compact('Loaigiay'));
    }
    public function all_Product(){
        $all_Product=DB::table('product')->get();
        $manager_Movie=view('/quanli_sanpham')->with('/quanli_sanpham',$all_Product);
        return view('quanli_sanpham')->with('all_Product',$all_Product);
    }
    public function save_Product(Request $request){
        if($request ->has('image')){
            $file =$request->image;
            $file_name=$file->getClientOriginalName();
            $file->move(base_path('/public/frontend/img'),$file_name);
        }
 
        $data =array();
        $data['id']=$request->id ; 
        $data['name_product']=$request->name_product;
        $data['price']=$request->price;
        $data['idloaigiay']=$request->	idloaigiay;    
        $data['image']= $file_name;      
        DB::table('product')->insert($data);
        Session::put('message','Thêm Sản phẩm thành công');
        return Redirect::to('quanli_sanpham');
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