<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\PostEditCategory;
class CategoryController extends Controller
{
    public function getCate(){
        $data['catelist'] = category::all();
        return view('backend.category',$data);
    }

    public function postCate(AddCateRequest $request){
        $category = new category;
        $category->cate_name = $request->name;
        $category->cate_slug = str_slug($request->name);
        $category->save();
        return back();

    }

    public function editCate($cate_id){
        $data['cate'] = category::where ('cate_id',$cate_id)->get();
        
        return view('backend.editcategory',$data);
    }
    public function postEdit(PostEditCategory $request){
        $category = new category;
        $category->cate_name = $request->name;
        $category->cate_slug = str_slug($request->name);
        $category->save();
        return back();

    }

    public function deleteCate(){
        return view('backend.category');
    }
}