<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    // untuk menampilkan daftar produk
    public function index()
    {
        $products = Product::paginate(12);

        return view('pages.shop', compact('products'));

    }



    // untuk menampilkan detail produk berdasarkan ID
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

    // untuk menampilkan produk terkait
    public function showRelatedProducts()
    {
        $relatedProducts = Product::latest()->take(3)->get();

        return view('partials.Related', [
            'relatedProducts' => $relatedProducts
        ]);
    }


    // untuk menampilkan daftar produk dalam mode admin
    public function a_index()
        {
            $products = Product::paginate(20);

            return view('pages.a_shop_list', compact('products'));

        }

        // untuk menampilkan detail produk berdasarkan ID dalam mode admin
        public function a_show($id)
        {
            // $product = Product::find($id);
            $product = Product::findOrFail($id);

            $relatedProducts = Product::where('category', $product->category)
                                ->where('id', '!=', $product->id)
                                ->inRandomOrder()
                                ->limit(4)
                                ->get();

            return view('pages.a_shop_details', compact('product', 'relatedProducts'));
        }

    // untuk menampilkan halaman form tambah produk
    public function create()
    {
        return view('pages.a_create_shop');
    }

    //untuk menyimpan produk baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'photos.*' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'size' => 'required',
            'thickness' => 'required',
            'category' => 'required',
            'tags' => 'nullable|array',
            'core' => 'required',
            'face_back' => 'required',
            'glue' => 'required',
            'grade' => 'required',
            'certificate' => 'required'
        ]);

        // Simpan file foto ke dalam folder images/product
        $photos = [];
        foreach ($request->file('photos') as $file) {
            $path = $file->store('images/product');
            $photos[] = $path;
        }

        // Gabungkan nilai-nilai tersebut menjadi array asosiatif
        $specifications = [
            'Short Core & Long Core' => $validatedData['core'],
            'Face & Back' => $validatedData['face_back'],
            'Glue' => $validatedData['glue'],
            'Grade' => $validatedData['grade'],
            'Certificate' => $validatedData['certificate']
        ];

        // Konversi array asosiatif menjadi JSON
        $specifications_json = json_encode($specifications);

        // Buat objek Product baru dan simpan ke database
        $product = new Product();
        $product->title = $validatedData['title'];
        $product->photos = json_encode($photos);
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->size = $validatedData['size'];
        $product->thickness = $validatedData['thickness'];
        $product->category = $validatedData['category'];
        $product->tags = $validatedData['tags'] ? json_encode($validatedData['tags']) : null;
        $product->specifications = $specifications_json;

        if (!$product->save()) {
            dd('Error: data failed to save to database');
        }

        return redirect()->route('products.show', ['id' => $product->id]);
    }


    // untuk menampilkan halaman form edit produk berdasarkan ID
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('pages.a_edit_shop', compact('product'));
    }

    // untuk mengupdate data produk berdasarkan ID
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'photos.*' => 'image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'size' => 'required',
            'thickness' => 'required',
            'category' => 'required',
            'tags' => 'nullable|array',
            'specifications' => 'nullable|array',
        ]);

        $product = Product::findOrFail($id);

        $product->update($validatedData);

        return redirect()->route('products.show', ['id' => $product->id]);
    }

    // untuk menghapus data produk berdasarkan ID
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('products.index');
    }
}
