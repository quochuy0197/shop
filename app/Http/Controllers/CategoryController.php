<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $category->cate_id = $request->id;
        $category->cate_name = $request->name;
        $category->cate_slug = str_slug($request->name);
        $category->save();  
        return back();

    }

    public function editCate($cate_id){
        $data['cate'] = category::where ('cate_id',$cate_id)->get();
        
        return view('backend.editcategory',$data);
    }
    public function postEdit(PostEditCategory $request,$cate_id){
        $category = category::find($cate_id);
        $category->cate_name = $request->name;
        $category->cate_slug = str_slug($request->name);
        $category->save();
        return redirect()->intended('admin/category');
    }

    public function deleteCate($cate_id){
        category::destroy($cate_id);
        return back();
    }
}