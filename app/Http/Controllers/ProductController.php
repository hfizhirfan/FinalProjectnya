<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;
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

        $pageTitle = 'Menu';

        return view('menu.index', [
            'pageTitle' => $pageTitle,
            'products' => $products
        ]);
    }

    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
        $products = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "name_product" => $products->name_product,
                "image" => $products->image,
                "price" => $products->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Tambah Menu' ;
        $types = Type::all();
        return view('admin.product.create', [
            'pagetitle' => $pageTitle,
            'types' => $types
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Attribute harus diisi',
            'numeric' => 'Isi : attribute dengan angka',
            'image' => 'Isi : attribute dengan jpg, jpeg, png saja'
        ];
        $validator = Validator::make($request->all(), [
            'name_product'=>'required',
            'price'=>'required|numeric',
            'image'=>'required|image',
        ], $messages);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(resource_path('images/menu'), $imageName);
        $tambahMenu = new Product();
        $tambahMenu->name_product = $request->name_product;
        $tambahMenu->price = $request->price;
        $tambahMenu->image = $imageName;
        $tambahMenu->type_id = $request->type;
        $tambahMenu->save();
        return redirect()->route('menu');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pagetitle = "Edit Menu";
        $products = Product::find($id);
        $types = Type::all();
        return view('admin.product.edit',[
            'pagetitle'=>$pagetitle,
            'products'=>$products,
            'types'=>$types
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Attribute harus diisi',
            'numeric' => 'Isi : attribute dengan angka',
            'image' => 'Isi : attribute dengan jpg, jpeg, png, bmp, gif, svg, atau webp saja'
        ];
        $validator = Validator::make($request->all(), [
            'name_product'=>'required',
            'price'=>'required|numeric',
            'image'=>'image',
        ], $messages);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(resource_path('images/nft'), $imageName);
            $tambahNFT = Product::find($id);
            $tambahNFT->name_product = $request->name_product;
            $tambahNFT->price = $request->price;
            $tambahNFT->image = $imageName;
            $tambahNFT->type_id = $request->type;
            $tambahNFT->save();

        }else{
            $tambahNFT = Product::find($id);
            $tambahNFT->name_product = $request->name_product;
            $tambahNFT->price = $request->price;
            $tambahNFT->type_id = $request->type;
            $tambahNFT->save();
        }
        return redirect()->route('admin.menu.index');


        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }

    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('product.index')->with('success','Produk berhasil dihapus');

    }

    public function showMenu()
    {
        $types = Type::all();;

        return view('menu', compact('types'));
    }
}
