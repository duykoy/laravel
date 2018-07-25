<?php
///**
// * Created by PhpStorm.
// * User: Dell
// * Date: 7/16/2018
// * Time: 3:56 PM
// */
//
//namespace App\Http\Controllers;
//
//
//use App\Product;
//use Illuminate\Support\Facades\Input;
//
//
//class AccountController extends Controller
//{
//    function home(){
//        return view("Home");
//    }
//    function register(){
//        return view("Register");
//    }
//    function login(){
//        return view("Login");
//    }
////    function list(){
////        return view("ProductList");
////    }
//    public function index()
//    {
//        $products = Product::all();
//        return view('Product')->with('products_in_views', $products);
//    }
//
//public function create()
//{
//    return view('admin.Product.list');
//}
//
//public function store()
//{
//    $product = new Product();
//    $product->name = Input::get('name');
//    $product->price = Input::get('price');
//    $product->categoryId = Input::get('categoryId');
//    $product->description = Input::get('description');
//    $product->image = Input::get('image');
//    $product->save();
//    return 'Success';
//}
//}