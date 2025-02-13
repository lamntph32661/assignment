<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add()
    {
        return view('admin/category/add');
    }
    public function addCate(CategoryRequest $req)
    {
        // $message=[
        //     'name.required'=>'Bạn chưa nhập vào trường này',
        //     'name.max'=>'Độ dài tối đa lầ 255 ký tự',
        // ];
        // $req->validate([
        //     'name' => 'required|string|max:255'
        // ],$message);
        $data = $req->all('name');
        Category::create($data);
        return redirect()->route('admin.Category.listCategory')->with(['message' => 'Thêm thành công']);
    }
    public function updateCategory($id)
    {
       $category= Category::find($id);

        return view('admin/category/update',compact('category'));
    }
    public function updateCategoryPost($id, CategoryRequest $req)  {
        // $message=[
        //     'name.required'=>'Bạn chưa nhập vào trường này',
        //     'name.max'=>'Độ dài tối đa lầ 255 ký tự',
        // ];
        // $req->validate([
        //     'name' => 'required|string|max:255'
        // ],$message);
        $data = $req->all('name');
        Category::where('id',$id)->update($data);
        return redirect()->route('admin.Category.listCategory')->with(['message' => 'Cập nhật thành công']);
    }
    public function deleteCategory($id)
    {
        Category::find($id)->delete();
        return redirect()->route('admin.Category.listCategory')->with(['message' => 'Xóa thành công']);
    }
    public function list()
    {
        $categories = Category::orderBy('id','DESC')->get();
        return view('admin/category/list', compact('categories'));
    }
}
