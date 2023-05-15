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
        $data['password']=$request->password;
        DB::table('user')->insert($data);
        return view('login');
    }
    public function dangnhap(Request $request){
        $username = $request->username;
        $password = $request ->password;
        $result= DB::table('user')->where('username',$email)->where('password',$password)->get();
        if(count($result)>0){
            Session::put('data_admin',$result[0]);
            return view('/');
        }
    }
}
