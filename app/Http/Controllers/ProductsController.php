<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Mark;
use App\Picture;


class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index',compact('products'));
    }

    public function create()
    {
        $product = new Product();
        $marks = Mark::all();
        return view('products.create',compact('product','marks'));
    }

    public function store(Request $request)
    {     
        $product = Product::create($this->validator());
        $this->validate_image($request,$product);
        return back();
    }

    public function show(Product $product)
    {    
        $pictures = Picture::where('product_id','=',$product->id)->get();
        return view('products.show',compact('product','pictures'));
    }
    
    public function edit(Product $product)
    {
        $marks = Mark::all();
        return view('products.edit',compact('product','marks'));
    }

    public function update(Product $product, Request $request){
        $product->update($this->validator());

        $this->validate_image($request,$product);
        return redirect('products');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        Picture::where('product_id','=',$product->id)->delete();
        return redirect('products');
    }

    private function validate_image($request,$product){

        if($request->hasFile('photos'))
        {
            $allowedfileExtension=['jpg','png','jpeg','webp'];
            $files = $request->file('photos');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check)
                {         
                    foreach ($request->photos as $photo) {
                        $imageName = time().rand().'.'.$extension;  

                        Picture::create([
                            'name' => $photo->move('photos',$imageName),
                            'product_id' => $product->id
                        ]);
                    }
                } 
            }
        }  

    }


    private function validator()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:5',
            'price' => 'required',
            'mark_id' => 'required',
        ]);
    }

}

