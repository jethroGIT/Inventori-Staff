<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRuanganRequest;
use App\Http\Requests\UpdateRuanganRequest;
use Illuminate\Contracts\Session\Session;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $searchTitle = $request->title ?? ''; // Default ke string kosong jika null

        // $ruangans = Ruangan::simplePaginate(10);
        // $ruangans = Ruangan::where('Nama_lab', 'LIKE', '%'.$searchTitle.'%')->simplePaginate(10);
        $ruangans = DB::table('Ruangan')->where('Nama_lab', 'LIKE', '%'.$searchTitle.'%')->simplePaginate(10);
        return view('ruangan.index', compact('ruangans', 'searchTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('ruangan.add');
    }

    public function create(Request $request)
    {
        // $ruangan = new Ruangan();
        // $ruangan->No_ruangan = $request->No_ruangan;
        // $ruangan->Nama_lab = $request->Nama_lab;
        // $ruangan->Kapasitas_orang = $request->Kapasitas_orang;
        // $ruangan->save();
        // return redirect('ruangan');

        //Query Builder
        $request->validate([
            'No_ruangan' => 'required|unique:Ruangan|max:5',
            'Nama_lab' => 'required|max:15',
            'Kapasitas_orang' =>'required'
        ]);

        DB::table('Ruangan')->insert([
            'No_ruangan' => $request->No_ruangan,
            'Nama_lab' => $request->Nama_lab,
            'Kapasitas_orang' => $request->Kapasitas_orang
        ]);
        session()->flash('success', 'Ruangan berhasil ditambahkan');
        return redirect()->route('ruangan');
    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRuanganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detailRuangan = DB::table('Ruangan')->where('No_ruangan', 'LIKE', '%'.$id.'%')->first();
        
        if ($detailRuangan == null) {
            abort(404);
        }

        return view('ruangan.detail', compact('detailRuangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editRuangan = DB::table('Ruangan')->where('No_ruangan', 'LIKE', '%'.$id.'%')->first();

        if ($editRuangan == null) {
            abort(404);
        }

        return view('ruangan.edit', compact('editRuangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'No_ruangan' => 'required|unique:Ruangan,No_ruangan,' . $id . ',No_ruangan|max:5',
            'Nama_lab' => 'required|max:15',
            'Kapasitas_orang' => 'required',
        ]);;

        DB::table('Ruangan')->where('No_ruangan', 'LIKE', '%'.$id.'%')->update([
            'No_ruangan' => $request->No_ruangan,
            'Nama_lab' => $request->Nama_lab,
            'Kapasitas_orang' => $request->Kapasitas_orang
        ]);

        session()->flash('success', 'Ruangan berhasil diedit');
        return redirect()->route('ruangan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ruangan = DB::table('Ruangan')->where('No_ruangan', 'LIKE', '%'.$id.'%')->delete();
        session()->flash('success', 'Ruangan berhasil dihapus');
        return redirect()->route('ruangan');
    }
}
