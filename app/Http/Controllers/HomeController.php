<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Detail;
use App\Shoe;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\New_;

class HomeController extends Controller
{
    //
    function index(){
        $shoes = Shoe::paginate(6);
        //paginate by 6
        return view('justdu-it.home')->with('shoes', $shoes);
    }

    function detailItem($id){
        $shoes = Shoe::find($id);
        //return 1 product dari yang dipilih
        return view('justdu-it.detailShoe')->with('shoes', $shoes);
    }

    function searchItem(Request $request){
        //search item berdasarkan name yang dicari
        $shoes = Shoe::where('name', 'LIKE', '%'.$request->search.'%')->paginate(6);
        return view('justdu-it.home')->with('shoes', $shoes);
    }

    function editCart($id){
        $cart = Cart::find($id);
        $shoe = Shoe::all();
        return view('justdu-it.editCart', ['cart' => $cart, 'shoe' => $shoe]);
    }

    function validatorAdd(Request $request){
        return $request->validate([
            'quantity' => 'required|numeric'
        ]);
    }

    function addCart(Request $request){
        $this->validatorAdd($request);

        $user = Auth::user()->id;
        $check = Cart::where('user_id', $user)->where('item_id', $request->input('item_id'))->count();
        if($check == 0){
            $cart = new Cart();

            $cart->user_id = $request->input('user_id');
            $cart->item_id = $request->input('item_id');
            $cart->quantity = $request->input('quantity');
            
            $cart->save();
        }else{
            $checked = Cart::where('user_id', $user)->where('item_id', $request->input('item_id'))->get()->first();
            $checked->quantity += $request->input('quantity');
            $checked->update();
        }
        return redirect('home');
    }


    function viewCart(){
        $user = Auth::user()->id;
        $cart = Cart::where('user_id', $user)->get();
        $shoe = Shoe::all();

        return view('justdu-it.viewCart', ['cart' => $cart, 'shoe' => $shoe]);
    }


    function delCart($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect('viewCart');
    }

    function updateCart(Request $request, $id){
        $this->validatorAdd($request);
        $cart = Cart::find($id);
        if($request->quantity == 0){
            $cart->delete();
        }else{
            $cart->quantity = $request->quantity;
            $cart->save();
        }
        
        return redirect('viewCart');
    }

    function checkout(){
        $user = Auth::user()->id;
        $cart = Cart::where('user_id', $user)->get();
        $subPrice = 0;
        $totalPrice = 0;
        $tr = new Transaction();
        foreach($cart as $i){
            $item = Shoe::find($i->item_id);   
            $tr->user_id = $i->user_id;
            $subPrice = $i->quantity * $item->price;
            $totalPrice = $totalPrice + $subPrice;
        }
        $tr->total = $totalPrice;
        $tr->save();


        foreach($cart as $i){
            $dt = new Detail();
            $item = Shoe::find($i->item_id);  
            $dt->transaction_id = $tr->id;
            $dt->item_id = $item->id;
            $dt->save();
        }

        $cart = Cart::where('user_id', $user)->delete();
        return redirect('home');
    }

    function viewTransaction(){
        $user = Auth::user()->id;
        $tr = Transaction::where('user_id', $user)->get();
        $trs = Transaction::all();
        $dts = Detail::all();
        $shoes = Shoe::all();

        return view('justdu-it.viewTransaction', ['tr' => $tr, 'trs' => $trs, 'dts' => $dts, 'shoes' => $shoes]);
    }

}
