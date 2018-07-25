<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 7/16/2018
 * Time: 3:56 PM
 */

namespace App\Http\Controllers;


use App\Category;
use App\Product;
use Illuminate\Support\Facades\Input;


class CategoryController extends Controller
{
    public function index(){
        $list_obj = Category::all();
        return view('admin.category.list')->with('list_obj', $list_obj);
    }
    public function create(){
        return view('admin.category.form');
    }
    public function store(){
        $obj = new Category();
        $obj -> name = Input::get('name');
        $obj -> description = Input::get('descrirption');
        $obj -> image = Input::get('image');
        $obj -> save();
        return redirect('admin/category/list');
    }
    public function edit($id){
        $obj = Category::find($id);
        if ($obj == null){
            return view('404');
        }
//        return view('admin.category.edit'); -> with('obj', $obj);
    }
    public function update(){
        $obj = Category::find(Input::get('id'));

    }
}