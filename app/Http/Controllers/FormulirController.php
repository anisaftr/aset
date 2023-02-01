<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulir = Formulir::all();
        return view('Data.formkembali-admin', compact('formulir'));
    }

    public function cetakKembali()
    {
        $formulirCetak = Formulir::all();
        return view('Data.cetak-kembali', compact('formulirCetak'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.form-kembali');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bidang = $request->bidang;
        $nama = $request->nama;
        $nip = $request->nip;
        $nama_barang = $request->nama_barang;
        $kode_barang = $request->kode_barang;
        $jumlah = $request->jumlah;
        $tglkembali = $request->tglkembali;

        $id_formulir = formulir::insertGetId([
            'bidang' => $bidang,
            'nama' => $nama,
            'nip' => $nip,
            'nama_barang' => $nama_barang,
            'kode_barang' => $kode_barang,
            'jumlah' => $jumlah,
            'status' => 1,
            'tglkembali' => $tglkembali,
        ]);
        return redirect('form-kembali')->with('success', 'Data Berhasil Terkirim!');

        
        $this->validate($request, [
            'bidang' => 'required|string|max:30',
            'nama' => 'required|string|max:30',
            'nip' => 'required|integer|max:30',
            'nama_barang' => 'required|string|max:30',
            'kode_barang' => 'required|string|max:30',
            'jumlah' => 'required|integer|max:30',
            'tglkembali' => 'required',
        ]);
    }

    public function approved($id)
    {
        try {
            Formulir::where('id', $id)->update([
                'status' => 2
            ]);
            \Session::flash('sukses', 'Form Pengembalian Diterima');
        } catch (\Exception $e) {
            \Session::flash('gagal', $e->getMessage());
        }
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
