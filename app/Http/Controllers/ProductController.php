<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function createProduct(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'features' => 'required|array'
        ]);
    
        $product = new Product();
        $product->name = $request->name;
        if ($request->file('image')) {
            $product->image = $request->file('image')->store('products', 'public');
        }
        $product->save();
    
        foreach ($request->features as $feature) {
            $product->features()->create(['feature' => $feature]);
        }
    
        return response()->json(['success' => 'Product created successfully.']);
    }
    
}
