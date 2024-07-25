<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function list()  {
        $products=Product::orderBy('id','DESC')->get();
        return view('admin/product/list', compact('products'));
    }
    public function add()  {
        $categories=Category::orderBy('id','DESC')->get();
        return view('admin/product/add', compact('categories'));
    }
    public function addPro(Request $req)  {
        $req->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'discount' => 'required|numeric|min:0|max:100',
            'quantity' => 'required|integer|min:1',
            'description' => 'required|string|max:1000',
        ]);
        $imageUrl='';
        if ($req->hasFile('image')) {
            $image=$req->file('image');
            $nameImage=time().".".$image->getClientOriginalExtension();
            $link="image/product/";
            $image->move(public_path($link),$nameImage);
            $imageUrl=$link.$nameImage;
        }
        $data=$req->all('name','price','discount','quantity','description','category_id');
        $data['image']=$imageUrl;
        Product::create($data);
        return redirect()->route('admin.Product.listProduct')->with(['message'=>'thêm mới thành công']);
        
    }
    function deleteProduct($id)  {
        $product= Product::find($id);
        if ($product->image!=null||$product->image=='') {
           File::delete(public_path($product->image));
           
        }

        $product->delete();

        return redirect()->route('admin.Product.listProduct')->with(['message'=>'Xóa thành công']);
    }
    public function updateProduct($id)  {
        $categories=Category::all();
        $product=Product::find($id);
        return view('admin/product/update',compact('product','categories'));
    }
    function updateProductPost($id, Request $req) {
        $req->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'discount' => 'numeric|min:0|max:100',
            'quantity' => 'required|integer|min:1',
            'description' => 'required|string|max:1000',
        ]);
        $data=$req->all('name','price','discount','quantity','description','category_id');
        
        if ($req->hasFile('image')) {
            $imageUrl='';
            $image=$req->file('image');
            $nameImage=time().".".$image->getClientOriginalExtension();
            $link="image/product/";
            $image->move(public_path($link),$nameImage);
            $imageUrl=$link.$nameImage;
            $data['image']=$imageUrl;
        }
        
        
        Product::where('id',$id)->update($data);
        return redirect()->route('admin.Product.listProduct')->with(['message'=>'Cập nhật thành công']);
    }
}
