<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;

use Illuminate\Support\Facades\Redirect;
session_start();
class UserController extends Controller
{
    public function insert_User(){
        return view('login');
    }
    
    public function register(Request $request){
        $data =array();
        $data['fullname']=$request->fullname;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['username']=$request->username;
        $data['password']=md5($request->password);
        DB::table('user')->insert($data);
        return view('login');
    }
   

    public function dangnhap(Request $request){
        $username = $request->username;
        $password = md5($request->password);
        $result= DB::table('user')->where('username',$username)->where('password',$password)->get();
        
        if(count($result)>0){
           Session::put('data',$result[0]);
            return view("index");
        }else{
           Session::put('message','Tài khoản hoặc mật khẩu sai');
           return view('login');
        }
    }
    public function logout(){
        Session::put('data',"");
        return view('login');
    }

    public function all_User(){
        $all_User=DB::table('user')->get();
        $manager_User=view('/quanli_user')->with('/quanli_user',$all_User);
        
        return view('quanli_user')->with('all_User',$all_User);
    }
}
