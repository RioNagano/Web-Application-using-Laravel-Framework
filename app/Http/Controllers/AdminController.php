<?php

namespace App\Http\Controllers;

use App\Shoe;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function index(){
        return view('justdu-it.admin');
    }
    
    function addItem(){
        return view('justdu-it.addShoe');
    }

    function editItem($id){
        $shoes = Shoe::find($id);
        //return 1 product yang dipilih
        return view('justdu-it.updateShoe')->with('shoes', $shoes);
    }

    function validatorAdd(Request $request){
        //validasi
        return $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:100',
            'image' => 'required|image'
        ]);
    }

    function validatorUpdate(Request $request){
        //validasi
        return $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'nullable'
        ]);
    }

    function storeItem(Request $request){
        //menyimpan data dari add shoe
        $this->validatorAdd($request);

        $shoe = new Shoe();

        $shoe->name = $request->input('name');
        $shoe->description = $request->input('description');
        $shoe->price = $request->input('price');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension(); //for image extension
            $filename = time() . '.' . $ext;
            $file->move('storage/images/', $filename);
            $shoe->image = $filename;
        } else {
            return $request;
            $shoe->image = '';
        }

        $shoe->save();

        return redirect('home');

    }

    function updateItem(Request $request, $id){
        //melakukan update item
        $this->validatorUpdate($request);

        $shoes = Shoe::find($id);
        $shoes->name = $request->name;
        $shoes->description = $request->description;
        $shoes->price = $request->price;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension(); //for image extension
            $filename = time() . '.' . $ext;
            $file->move('storage/images/', $filename);
            $shoes->image = $filename;
        } 

        $shoes->save();

        return redirect('home');

    }


}
