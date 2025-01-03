<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id = $request->title;

        // $barangs = Barang::all();
        $barangs = DB::table('Barang')->where('Nama_barang', 'LIKE', '%'.$id.'%')->simplePaginate(10);
        return view('barang.index', compact('barangs', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'No_inventaris' => 'required|unique:Barang|max:10',
            'Nama_barang' => 'required|max:10',
            'Jenis_barang' => 'required|max:10',
            'Merk_barang' => 'required|max:10',
            'Stock_barang' => 'required'
        ]);

        DB::table('Barang')->insert([
            'No_inventaris' => $request->No_inventaris,
            'Nama_barang' => $request->Nama_barang,
            'Jenis_barang' => $request->Jenis_barang,
            'Merk_barang' => $request->Merk_barang,
            'Stock_barang' => $request->Stock_barang
        ]);

        return redirect()->route('barang');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detailBarang = DB::table('Barang')->where('No_inventaris', 'LIKE', '%'.$id.'%')->first();

        if ($detailBarang == null) {
            abort(404);
        }

        return view('barang.detail', compact('detailBarang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editBarang = DB::table('Barang')->where('No_inventaris', 'LIKE', '%'.$id.'%')->first();

        if ($editBarang == null) {
            abort(404);
        }

        return view('barang.edit', compact('editBarang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'No_inventaris' => 'required|unique:Barang,No_inventaris,' .$id. ',No_inventaris|max:10',
            'Nama_barang' => 'required|max:10',
            'Jenis_barang' => 'required|max:10',
            'Merk_barang' => 'required|max:10',
            'Stock_barang' => 'required'
        ]);

        $updateBarang = DB::table('Barang')->where('No_inventaris', $id)->first();

        if ($updateBarang == null) {
            abort(404);
        }

        DB::table('Barang')->where('No_inventaris', $id)->update([
            'No_inventaris' => $request->No_inventaris,
            'Nama_barang' => $request->Nama_barang,
            'Jenis_barang' => $request->Jenis_barang,
            'Merk_barang' => $request->Merk_barang,
            'Stock_barang' => $request->Stock_barang
        ]);

        return redirect()->route('barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $destroyBarang = DB::table('Barang')->where('No_inventaris', $id)->delete();
        return redirect()->route('barang');
    }
}
