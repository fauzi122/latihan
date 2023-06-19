<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaranaPrasarana;

class SaranaPrasaranaController extends Controller
{
    /**
     * Menampilkan halaman indeks sarana prasarana.
     */
    public function index()
    {
        $saranaPrasarana = SaranaPrasarana::all();
        return view('sarana.index', ['saranaPrasarana' => $saranaPrasarana]);
    }

    /**
     * Menampilkan halaman tambah sarana prasarana.
     */
    public function create()
    {
        return view('sarana.create');
    }

    /**
     * Menyimpan data sarana prasarana baru.
     */
    public function store(Request $request)
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

        $saranaPrasarana = new SaranaPrasarana();
        $saranaPrasarana->nama_moda = $request->input('nama_moda');
        $saranaPrasarana->jenis = $request->input('jenis');
        $saranaPrasarana->nomor = $request->input('nomor');
        $saranaPrasarana->deskripsi = $request->input('deskripsi');
        $saranaPrasarana->lokasi = $request->input('lokasi');
        $saranaPrasarana->kapasitas = $request->input('kapasitas');
        $saranaPrasarana->satuan = $request->input('satuan');
        $saranaPrasarana->tanggal_pembelian = $request->input('tanggal_pembelian');
        $saranaPrasarana->save();

        return redirect()->route('sarana.index')->with('success', 'Sarana prasarana berhasil disimpan.');
    }

    /**
     * Menampilkan halaman edit sarana prasarana.
     */
    public function edit($id)
    {
        $saranaPrasarana = SaranaPrasarana::findOrFail($id);
        return view('sarana.edit', ['saranaPrasarana' => $saranaPrasarana]);
    }

    /**
     * Mengupdate data sarana prasarana.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_moda' => 'required',
            'jenis' => 'required',
            'nomor' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'kapasitas' => 'required|numeric',
            'satuan' => 'required',
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

        return redirect()->route('sarana.index')->with('success', 'Sarana prasarana berhasil diperbarui.');
    }

    /**
     * Menghapus data sarana prasarana.
     */
    public function destroy($id)
    {
        $saranaPrasarana = SaranaPrasarana::findOrFail($id);
        $saranaPrasarana->delete();

        return redirect()->route('sarana.index')->with('success', 'Sarana prasarana berhasil dihapus.');
    }
}
