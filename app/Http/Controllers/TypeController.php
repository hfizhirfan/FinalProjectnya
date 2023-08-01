<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //     return view('admin.type.index', [
    //         'pageTitle' => 'Data Kategori',
    //         'types' => Type::all()
    //     ]);
    $types = Type::all();

    $pageTitle = 'Daftar Kategori';

    return view('admin.type.index', [
        'pageTitle' => $pageTitle,
        'types' => $types
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.type.create', [
            'pageTitle' => 'Tambah Kategori'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $messages = [

            'required' => ':Attribute harus diisi.'
        ];
    
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'name' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category = new Type();
        $category->kode_tipe = $request->code;
        $category->nama_tipe = $request->name;
        $category->save();

        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $pageTitle = 'Detail Kategori';

        // Eloquent
        $category = Type::find($id);

        return view('admin.type.show', compact('pageTitle', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {

        $pageTitle = 'Edit Kategori';

        $category = Type::find($id);

        return view('admin.type.edit', compact('pageTitle', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $messages = [
            'required' => ':Attribute harus diisi.'
        ];
    
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'name' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();

        $data = request()->except(['_token']);

        try {
            $validator = Validator::make(
                $data,
                [
                    'code' => 'required|min:1',
                    'name' => 'required|min:3'
                ],
                [
                    'required' => ':Attribute harus diisi.',
                    'min' => ':Attribute terlalu pendek.'
                ],
                [
                    'code' => 'Kode Kategori',
                    'name' => 'Nama Kategori'
                ]
            );

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $category = Type::findOrFail($id);
            $category->update([
                'kode_tipe' => $data['code'],
                'nama_tipe' => $data['name']
            ]);

            Alert::success('Changed Successfully', 'Menu Data Changed Successfully.');

            return $this->respondRedirectMessage('kategori.index');
        } catch (\Exception $e) {
            return "{$e->getMessage()}, {$e->getCode()}";
        }

        $category = Type::find($id);
        $category->kode_tipe = $request->code;
        $category->nama_tipe = $request->name;
        $category->save();

        return redirect()->route('kategori.index');

        Alert::success('Changed Successfully', 'Data Kategori Changed Successfully.');

        return redirect()->route('type.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category= Type::find($id);
        $category->products()->delete();
        $category->delete();
        return redirect()->route('kategori.index')->with('success','Produk berhasil dihapus');
        try {
            $category = Type::findOrFail($id);
            $category->products()->delete();
            $category->delete();

            Alert::success('Deleted Successfully', 'Data Menu Deleted Successfully.');

            return redirect()->route('kategori.index');
        } catch (\Exception $e) {
            return "{$e->getMessage()}, {$e->getCode()}";
        }
    }
}
