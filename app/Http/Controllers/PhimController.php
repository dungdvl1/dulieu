<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\phim;
use App\Http\Requests\AddPhimRequest;


class PhimController extends Controller
{
    //
    public function getPhim(){
        $phim = phim::all();
        return view('Admin.product',compact('phim'));
    }

    public function getAddPhim(){
        return view("Admin.addproduct");
    }
    public function postAddPhim(Request $req){
        
        $phim = new phim;
        $phim->ten_phim = $req->ten_phim;
        $phim->loai_phim = $req->loai_phim;
        $phim->daodien = $req->daodien;
        $phim->dienvien = $req->dienvien;
        $phim->xuatxu = $req->xuatxu;
        $phim->thoiluong = $req->thoiluong;
        $phim->noidung = $req->noidung;
        $phim->ngay_chieu = $req->ngaychieu;
        $phim->hinh_title = $req->hinh_title->getClientOriginalName();
        $phim->hinh_background = $req->hinh_background->getClientOriginalName();
        $phim->hinh_checkout = $req->hinh_checkout->getClientOriginalName();
        $phim->video = $req->video;

        $phim->save();

        return redirect('Admin/phim')->with(['flag'=>'Success','message'=>'Thêm phim thành công']);
    }

    public function getEditPhim(){
        return view('Admin.editproduct');
    }
    public function postEditPhim(){

    }

    public function getDeletePhim(){

    }
}
