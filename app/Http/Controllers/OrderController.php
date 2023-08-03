<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        $pageTitle = 'Menu';

        return view('order.index', [
            'pageTitle' => $pageTitle,
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $latestId=$_GET['id'];
        $products=Product::find($latestId);
        return view('order.create',[
            'products'=>$products,
            'id'=>$latestId
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $latestId = $request->dataid;
        // var_dump($latestId);die();
        $messages = [
            'required' => ':Attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'qty' => 'required',
            'table_number' => 'required|numeric',
            'customer_name'=>'required'
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $products= Product::find($latestId);
        $harga = $products->price * $request->qty;
        // var_dump($harga);die();
        $order = New Cart;
        $order->product_id = $latestId;
        $order->qty = $request->qty;
        $order->total = $harga;
        $order->nama = $request->customer_name;
        $order->no_meja = $request->table_number;
        $order->save();
        $id = $order->id;

        Alert::html('Terima kasih telah memesan!',
        'Pesanan anda telah diproses, silahkan <a href="' . route('order.exportPdf', ['id' => $id]) . '">cetak struk</a> disini',
        'success');

        // return redirect()->route('order.exportPdf',[
        //     'id'=>$id
        // ]);
        return redirect()->route('order.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function exportPdf(string $id)
    {

        $order = Cart::find($id);
        // var_dump($employees->product->name_product);die();

        $pdf = PDF::loadView('order.export_pdf', compact('order'));

        return $pdf->download('struck.pdf');

    }
}
