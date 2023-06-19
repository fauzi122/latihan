<?php

namespace App\Http\Controllers\admin;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SaranaPrasarana;

class PrasaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sarana = SaranaPrasarana::all();
        return view('admin.sarana.index',compact('sarana'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sarana.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_moda' => 'required|string|max:255',
            'jenis'     => 'required|in:Tangki,Pipa,Barge',
            'nomor'     => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'lokasi'    => 'required|string|max:255',
            'kapasitas' => 'required|string|max:255',
            'satuan'    => 'required|in:Liter,Kiloliter',
            'tanggal_pembelian' => 'required|date',
        ]);
    
        SaranaPrasarana::create($validatedData);

        Alert::success('success','User Create successfully');
        return redirect()->route('prasarana');

    }

    /**
     * Display the specified resource.
     */
    public function show(SaranaPrasarana $saranaPrasarana, $id)
    {
        $sarana = SaranaPrasarana::findOrFail($id);
        return view('admin.sarana.show', compact('sarana'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SaranaPrasarana $saranaPrasarana, $id)
    {
        $sarana = SaranaPrasarana::findOrFail($id);
        return view('admin.sarana.edit', compact('sarana'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SaranaPrasarana $saranaPrasarana, $id)
    {
        $request->validate([
            'nama_moda' => 'required',
            'jenis'     => 'required',
            'nomor'     => 'required',
            'deskripsi' => 'required',
            'lokasi'    => 'required',
            'kapasitas' => 'required|numeric',
            'satuan'    => 'required',
            'tanggal_pembelian' => 'required|date',
        ]);

        $saranaPrasarana = SaranaPrasarana::findOrFail($id);
        $saranaPrasarana->nama_moda = $request->input('nama_moda');
        $saranaPrasarana->jenis = $request->input('jenis');
        $saranaPrasarana->nomor = $request->input('nomor');
        $saranaPrasarana->deskripsi = $request->input('deskripsi');
        $saranaPrasarana->lokasi = $request->input('lokasi');
        $saranaPrasarana->kapasitas = $request->input('kapasitas');
        $saranaPrasarana->satuan = $request->input('satuan');
        $saranaPrasarana->tanggal_pembelian = $request->input('tanggal_pembelian');
        $saranaPrasarana->save();

        Alert::success('success','User Create successfully');
        return redirect()->route('prasarana');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SaranaPrasarana $saranaPrasarana)
    {
        $saranaPrasarana->delete();
        Alert::success('success','User deleted successfully');
        return redirect()->route('prasarana');
    }
}
