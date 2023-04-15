<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(15);

        // mengambil data news terbaru
        $news = News::latest()->take(5)->get();

        // melewatkan data products dan news ke view home.blade.php
        return view('pages.home', compact('products', 'news'));
    }


    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show', ['product' => $product]);
    }



}
