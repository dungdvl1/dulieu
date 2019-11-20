<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\phim;
use App\slide;
use App\ghe;
use App\hang_ghe;
use App\ghe_chon;
use App\suatchieu;
use App\giochieu;
use App\rap;
use App\phong;
use App\Cart;
use Session;
use Auth;
use Hash;
use App\khachhang;



class PageController extends Controller
{
    //
    public function getIndex(){
        // get all phim
        $phim = phim::all();
        $slide = slide::all();
        
        // \print_r($slide);

        // return ve trang view va dua du lieu tucontroller qua view
        // use compact('phim') or ['phim' => $phim] 
        // return view("page.trangchu",['phim'=>$phim]);
        return view("page.trangchu",compact('phim','slide'));
    }

    public function getPhim($id){
        $phim = phim::where('id_phim',$id)->first();

        $suatchieu = suatchieu::where('id_phim',$id)->get();

        $id=array();
        foreach ($suatchieu as $key => $value) {
            $id[]=$value->id_suatchieu;
        }

        $giochieu=giochieu::get();
        
        return view('page.chitietphim',\compact('phim','suatchieu','id','giochieu'));
    }

    public function checkout(){
        
        
        return view('page.checkout');
    }

    public function chonghe(){

        $hang = hang_ghe::all();
        $soghe=ghe::all();
        $rap = rap::all();
        
        return view('page.chonghe',\compact('hang','soghe','rap'));
    }

    public function getAddToCart(Request $req, $id){
        $phim = phim::find($id);
        $oldcart = Session('cart')?Session::get('cart'):null;
        $cart = new cart($oldcart);
        $cart->add($phim,$id);
        $req->Session()->put('cart',$cart);
        return redirect()->back();
    }

    public function getdangnhap(){
        return view('page.dangnhap');
    }

    public function postdangnhap(Request $req){
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
            return redirect()->intended('index');
        }else {
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }
    }

    public function getRegister(){
        return view('page.dangky');
    }

    public function postRegister(Request $req){
        $this->validate($req,
        [
            'email' => 'required|email|unique:khachhang,email',
            'password' => 'required|min:6|max:20',
            'ten' =>'required',
            'password1' => 'required|same:password'
        ],
        [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email không đúng định dạng',
            'password.required'=>'Vui lòng nhập password',
            'password1.same' =>'Mật khẩu không giống nhau',
            'password.min'=>'Mật khẩu ít nhất 6 ký tự',
            'password.max'=>'Mật khẩu không quá 20 ký tự'
        ]);

        $khachhang = new khachhang();
        $khachhang->tenKH = $req->ten;
        $khachhang->sodienthoai = $req->sodienthoai;
        $khachhang->email = $req->email;
        $khachhang->password = Hash::make($req->password);
        $khachhang->save();
        
        return redirect()->back()->with(['flag'=>'danger','message'=>'Tạo tài khoản thành công']);
    }
}