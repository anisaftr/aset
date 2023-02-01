<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form::all();
        return view('Data.form-admin', compact('form'));
    }

    public function cetakPinjam()
    {
        $formCetak = Form::all();
        return view('Data.cetak-pinjam', compact('formCetak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.form-data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

      
            $nama = $request->nama;
            $bidang = $request->bidang;
            $nip = $request->nip;
            $nama_barang = $request->nama_barang;
            $kode_barang = $request->kode_barang;
            $jumlah = $request->jumlah;
            $tglpinjam = $request->tglpinjam;

            $id_form = form::insertGetId([
                'nama' => $nama,
                'bidang' => $bidang,
                'nip' => $nip,
                'nama_barang' => $nama_barang,
                'kode_barang' => $kode_barang,
                'jumlah' => $jumlah,
                'status' => 1,
                'tglpinjam' => $tglpinjam,
            ]);
            return redirect('form-data')->with('success', 'Data Berhasil Terkirim!');

            
            $this->validate($request, [
                'nama' => 'required|string|max:30',
                'bidang' => 'required|string|max:30',
                'nip' => 'required|integer|max:30',
                'nama_barang' => 'required|string|max:30',
                'kode_barang' => 'required|string|max:30',
                'jumlah' => 'required|integer|max:30',
                'tglpinjam' => 'required',
            ]);
        
    }

    public function approved($id)
    {
        try {
            Form::where('id', $id)->update([
                'status' => 2
            ]);
            \Session::flash('sukses', 'Form Peminjaman Disetujui');
        } catch (\Exception $e) {
            \Session::flash('gagal', $e->getMessage());
        }
        return redirect()->back();
    }

    public function decline($id)
    {
        try {
            Form::where('id', $id)->update([
                'status' => 3
            ]);
            \Session::flash('sukses', 'Form Peminjaman Tidak Disetujui');
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
