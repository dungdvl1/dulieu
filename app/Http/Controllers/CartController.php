<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\phim;

class CartController extends Controller
{
    //
    public function getaddCart($id){
        $phim = phim::where('id_phim',$id)->first();
        Cart::add(['id' => $id, 'name' => $phim->ten_phim, 'qty' => 1, 'price' => 9.99,'weight' => 1, 'options' => ['hinh_checkout' => $phim->hinh_checkout]]);
        return redirect('cart/show');
    }
}
