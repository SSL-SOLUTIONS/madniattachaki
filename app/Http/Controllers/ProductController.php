<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'image' => 'required|image',
            'price' => 'required',
            'description' => 'required|max:500',
           ]);
        //    dd($request->all());
           $imageName = time().'.'.$request->image->extension();  
           $request->image->move(public_path('admin/images/products'), $imageName);

           $product =Product::create([
            'title'=>$request->title,
            'image'=>$imageName,
            'price'=>$request->price,
            'description'=>$request->description,
        ]);
        return redirect()->route('product.index')->with('success','Product Added Successfully');
  

   }


   

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:100',
            'image' => 'nullable|image',
            'price' => 'required',
            'description' => 'required|max:500',
           ]);
           $product = Product::where('id',$id)->first();
           if($request->has('image')){
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('admin/images/products'), $imageName);
            $product->image = $imageName;
           }
           $product->title = $request->title;
           $product->price = $request->price;
           $product->description = $request->description;
           $product->save();
           return redirect()->route('product.index')->with('success','Product Updated Successfully');
    }
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')
            ->with('success', 'Product deleted successfully');
    }
}
