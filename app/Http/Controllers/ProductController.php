<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

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

        // $image = $request->file('image');
        // $imageName = time() . '.' . $image->getClientOriginalExtension();
        // $image->move(resource_path('images/menu'), $imageName);
        // $image->store('public/menu');

        // Get File
        $image = $request->file('image');

        if ($image != null) {
            $imageName = $image->getClientOriginalName();
            $encryptedImage = $image->hashName();

            // Store File
            $image->store('public/menu');
        }

        $product = New Product();
        $product->name_product = $request->name_product;
        $product->price = $request->price;
        $product->type_id = $request->type;

        if ($image != null) {
            $product->image = $imageName;
            $product->encrypted_image = $encryptedImage;
        }

        $product->save();

        Alert::success('Added Successfully', 'Data Menu Added Successfully.');

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

        // Get File
        $image = $request->file('image');

        if ($image != null) {
            $imageName = $image->getClientOriginalName();
            $encryptedImage = $image->hashName();

            // Store File
            $image->store('public/menu');
            
            // Hapus file lama jika ada
            $products = Product::find($id);
            if ($products->encrypted_image) {
                Storage::delete('public/menu/'.$products->encrypted_image);
            }
        }

        $product = Product::find($id);
        $product->name_product = $request->name_product;
        $product->price = $request->price;
        $product->type_id = $request->type;

        if ($image != null) {
            $product->image = $imageName;
            $product->encrypted_image = $encryptedImage;
        }

        $product->save();

        Alert::success('Changed Successfully', 'Data Menu Changed Successfully.');

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            $product = Product::find($id); // Mengambil data produk berdasarkan ID

        if (!$product) {
            // Jika produk dengan ID tersebut tidak ditemukan, lakukan penanganan error sesuai kebutuhan.
            // Misalnya, bisa mengarahkan ke halaman error atau menampilkan pesan error.
            // Contoh: return redirect()->route('product.index')->withErrors('Product not found.');
        } else {
            // Hapus dari storage jika produk ditemukan dan memiliki encrypted_image
            if ($product->encrypted_image) {
                Storage::delete('public/menu/'.$product->encrypted_image);
            }

            $product->delete(); // Hapus data produk

            Alert::success('Deleted Successfully', 'Data Menu Deleted Successfully.');
        }

        return redirect()->route('product.index');
    }

    public function downloadFile($employeeId)
    {
        $product = Product::find($employeeId);
        $encryptedImage = 'public/menu/'.$product->encrypted_image;
        $downloadImagename = Str::lower($product->name_product.'.jpg');

        if(Storage::exists($encryptedImage)) {
            return Storage::download($encryptedImage, $downloadImagename);
        }
    }
}
