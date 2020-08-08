<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function getdanhsach(){
    	$product = Product::all();
    	return view('product.list',['product'=>$product]);
    }
    public function getthem(){
    	$product = Product::all();
    	return view('product.add',compact('product'));
    }
    public function postthem(Request $rq){
    	$product = new Product();
    	$product->id = $rq->id;
    	$product->name = $rq->name;
    	$product->price = $rq->price;
    	$product->description = $rq->description;
    	$product->save();
    	return redirect('product/list');
    }
    public function getsua($id){
    	$product = Product::all();
    	$product = Product::find($id);
    	return view('product.edit',compact('product'));
    }
    public function postsua(Request $rq,$id){
    	$product = Product::find($id);
    	$product->id = $rq->id;
    	$product->name = $rq->name;
    	$product->price = $rq->price;
    	$product->description = $rq->description;
    	$product->save();
    	return redirect('product/list');
    }
    public function getxoa($id)
    {
    	$product = Product::find($id);
    	$product->delete();
    	return redirect('product/list');
    }
}
