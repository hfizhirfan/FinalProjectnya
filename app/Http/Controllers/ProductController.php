<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eloquent
        $products = Product::all();

        $pageTitle = 'Daftar Menu';

        return view('admin.product.index', [
            'pageTitle' => $pageTitle,
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Tambah Menu';

        $types = Type::all();

        return view('admin.product.create', compact('pageTitle', 'types'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka',
            'image' => 'Isi :attribute dengan jpg, jpeg, png, bmp, gif, svg, atau webp saja',
            'max' => 'Ukuran gambar tidak boleh lebih dari 2MB.'
        ];
    
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|max:2048',
            'name_product' => 'required',
            'price' => 'required|numeric',
        ], $messages);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(resource_path('images/menu'), $imageName);

        $product = New Product();
        $product->name_product = $request->name_product;
        $product->price = $request->price;
        $product->image = $imageName;
        $product->type_id = $request->type;
        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail Menu';

        // Eloquent
        $product = Product::find($id);

        return view('admin.product.show', compact('pageTitle', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Menu';

        // Eloquent
        $types = Type::all();
        $product = Product::find($id);

        return view('admin.product.edit', compact('pageTitle', 'types', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('product.index')->with('success','Produk berhasil dihapus');
    }
}
