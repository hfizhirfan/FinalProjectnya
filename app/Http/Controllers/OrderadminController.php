<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CartsExport;
use RealRashid\SweetAlert\Facades\Alert;

class OrderadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Cart::all();

        $pageTitle = 'Data Transaksi';

        return view('admin.order.index', [
            'pageTitle' => $pageTitle,
            'orders' => $orders
        ]);
    }

    public function exportExcel()
    {
        return Excel::download(new cartsExport, 'order_report.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        // Eloquent
        Cart::find($id)->delete();

        Alert::success('Deleted Successfully', 'Order Data Deleted Successfully.');

        return redirect()->route('transaksi.index');

    }
}
