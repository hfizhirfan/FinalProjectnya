<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.type.index', [
            'pageTitle' => 'Data Kategori',
            'types' => Type::all()
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
    public function store()
    {
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

            $category = new Type();
            $category->kode_tipe = $data['code'];
            $category->nama_tipe = $data['name'];
            $category->save();

            Alert::success('Added Successfully', 'Data Menu Added Successfully.');

            return $this->respondRedirectMessage('kategori.index');
        } catch (\Exception $e) {
            return "{$e->getMessage()}, {$e->getCode()}";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.type.show', [
            'pageTitle' => 'Detail Kategori',
            'category' => Type::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.type.edit', [
            'pageTitle' => 'Edit Kategori',
            'category' => Type::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
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
