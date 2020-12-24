<?php

namespace App\Http\Controllers;

use App\Shoe;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    function detailShoe($id){
        $shoes = Shoe::find($id);
        return view('justdu-it.addCart')->with('shoes', $shoes);
    }

}
