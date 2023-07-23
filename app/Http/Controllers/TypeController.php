<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function showProductsByCategory($id)
    {
        $types = Type::findOrFail($id);
        $products = $types->products; // Mendapatkan produk berdasarkan kategori

        return view('category.products', compact('category', 'products'));
    }
}
