<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(12);

        return view('pages.shop', compact('products'));

    }



    public function show($id)
    {
        // $product = Product::find($id);
        $product = Product::findOrFail($id);

        $relatedProducts = Product::where('category', $product->category)
                            ->where('id', '!=', $product->id)
                            ->inRandomOrder()
                            ->limit(4)
                            ->get();

        return view('pages.shop_details', compact('product', 'relatedProducts'));
    }

    public function showRelatedProducts()
        {
            $relatedProducts = App\Models\Product::latest()->take(3)->get();

            return view('partials.Related', [
                'relatedProducts' => $relatedProducts
            ]);
        }





}
