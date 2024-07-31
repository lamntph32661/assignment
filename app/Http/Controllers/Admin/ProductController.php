<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\AddProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function list()
    {
        $products = Product::join('categories','categories.id','=','products.category_id')->select('products.*','categories.name as cate_name')->orderBy('products.id', 'DESC')->get();
        return view('admin/product/list', compact('products'));
    }
    public function add()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin/product/add', compact('categories'));
    }
    public function addPro(AddProductRequest $req)
    {
        
        $imageUrl = '';
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $nameImage = time() . "." . $image->getClientOriginalExtension();
            $link = "image/product/";
            $image->move(public_path($link), $nameImage);
            $imageUrl = $link . $nameImage;
        }
        $data = $req->all('name', 'price', 'discount', 'quantity', 'description', 'category_id');
        $data['image'] = $imageUrl;
        Product::create($data);
        return redirect()->route('admin.Product.listProduct')->with(['message' => 'thêm mới thành công']);
    }
    function deleteProduct($id)
    {
        $product = Product::find($id);
        if ($product->image != null || $product->image == '') {
            File::delete(public_path($product->image));
        }

        $product->delete();

        return redirect()->route('admin.Product.listProduct')->with(['message' => 'Xóa thành công']);
    }
    public function updateProduct($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('admin/product/update', compact('product', 'categories'));
    }
    function updateProductPost($id, UpdateProductRequest $req)
    {
        // $req->validate([
        //     'name' => 'required|string|max:255',
        //     'price' => 'required|numeric|min:0|max:99999999',
        //     'discount' => 'required|numeric|min:0|max:100',
        //     'quantity' => 'required|integer|min:1',
        //     'description' => 'required|string|max:500',
        // ],[
        //     'name.required'=>'Vui lòng điền vào trường này',
        //     'price.required'=>'Vui lòng điền vào trường này',
        //     'quantity.required'=>'Vui lòng điền vào trường này',
        //     'description.required'=>'Vui lòng điền vào trường này',
        //     'name.max'=>'Độ dài tối đa là 255 ký tự',
        //     'description.max'=>'Độ dài tối đa là 1000 ký tự',
        //     'discount.max'=>'Giảm giá tối đa là 100%',
        //     'discount.min'=>'Tối thiểu là 0',
        //     'quantity.min'=>'Tối thiểu là 1',
        //     'price.min'=>'Tối thiểu là 0',
        //     'price.max'=>'Tối đa là 8 chữ số',
        // ]);
        $data = $req->all('name', 'price', 'discount', 'quantity', 'description', 'category_id');

        if ($req->hasFile('image')) {
            $product = Product::find($id);
            if ($product->image != null || $product->image == '') {
                File::delete(public_path($product->image));
            }
            $imageUrl = '';
            $image = $req->file('image');
            $nameImage = time() . "." . $image->getClientOriginalExtension();
            $link = "image/product/";
            $image->move(public_path($link), $nameImage);
            $imageUrl = $link . $nameImage;
            $data['image'] = $imageUrl;
        }


        Product::where('id', $id)->update($data);
        return redirect()->route('admin.Product.listProduct')->with(['message' => 'Cập nhật thành công']);
    }
}
