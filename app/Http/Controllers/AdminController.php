<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\phim;
use App\giochieu;
use App\suatchieu;
use App\slide;
use App\ve;

class AdminController extends Controller
{
    //

    public function getHome(){
        $phim = phim::all();
        $giochieu = giochieu::all();
        $suatchieu = suatchieu::all();
        $slide = slide::all();
        $ve = ve::all();
        return view('Admin.index',compact('phim','giochieu','suatchieu','slide','ve'));
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->intended('Admin/login');
    }

    public function getLogin(){
        return view('Admin.login');
    }

    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email' => 'required|email',
                'password' => 'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập password',
                'password.min'=>'Mật khẩu ít nhất 6 ký tự',
                'password.max'=>'Mật khẩu không quá 20 ký tự'
            ]
        );
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        if (Auth::attempt($credentials)) {
            if(Auth::check()){
                return redirect()->intended('Admin/');
            }
        }else {
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }
    }
}