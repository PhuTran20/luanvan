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
    
}
