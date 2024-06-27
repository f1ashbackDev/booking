<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Catalogs;
use App\Models\Image;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function index()
    {
        return view('new_admin.product',[
            'products' => Services::all(),
        ]);
    }

    public function store(Request $request)
    {
        $path = $request->file('image')->store('products', 'public');
        $product = Services::create([
            'name' => $request->name,
            'count' => $request->count,
            'price' => $request->price,
            'image' => $path,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.products.index');
    }

    public function edit(Services $products)
    {
        return view('new_admin.product-edit', [
           'product' => $products,
           'image' => $products->image,
        ]);
    }

    public function update(Request $request, Services $products)
    {
        if($request->has('name')) {
            $products->update([
                'name' => $request->name
            ]);
        }
        if($request->has('price')){
            $products->update([
                'price' => $request->price
            ]);
        }
        if($request->has('description')){
            $products->update([
                'description' => $request->description
            ]);
        }
        if($request->hasFile('image')){
            $destroyImage = $products->image;
            Storage::disk('public')->delete($destroyImage);
            $path = $request->file('image')->store('products', 'public');
            $products->update([
                'image' => $path
            ]);
//            $image = Image::where(['products_id' => $products->id])->get();
//            foreach ($image as $item){
//                Storage::disk('public')->delete($image->image);
//                $item->delete();
//            }
//            foreach ($request->file('image') as $item){
//                $path = $item->store('products', 'public');
//                $image = new Image();
//                $image->image = $path;
//                $image->products_id = $products->id;
//                $image->save();
//            }
        }
        return redirect()->route('admin.products.index');
    }

    public function delete(Services $products)
    {
        $image = Image::where(['products_id' => $products->id])->get();
        foreach ($image as $item){
            Storage::disk('public')->delete($item->image);
            $item->delete();
        }
        $products->delete();
        return redirect()->route('admin.products.index');
    }
}
