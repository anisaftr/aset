<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DataExport;
use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\Data;
use Illuminate\Support\Facades\Validator;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtBarang = Data::paginate(5);
        return view('Data.data-barang', compact('dtBarang'));
    }

    public function dataexport() 
    {
        return Excel::download(new DataExport, 'data.xlsx');
    }

    public function dataimportexcel(Request $request) 
    {
        $file = $request->file;
        $namafile = $file->getClientOriginalName('file');
        $file->move('DataBarang', $namafile);
        Excel::import(new DataImport, public_path('/DataBarang/'.$namafile));
            
        return redirect('/data-barang');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Data.create-data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'nama_barang' => 'required|string|max:30',
            'kode_barang' => 'required',
            'merk' => 'required|string|max:30',
            'tahun' => 'required|integer',
            'asal_cara' => 'required|string|max:30',
            'kondisi' => 'required|string|max:30',
            'ket' => 'string',
        ]);

        $rules = [
            'nama_barang' => 'string', 
            'kode_barang' => 'string',
            'merk' => 'string',
            'tahun' => 'string',
            'asal_cara' => 'string',
            'kondisi' => 'string',
            'ket' => 'string',
        ];

        $message = [
            'nama_barang' => 'Nama Barang Harus Diisi', 
            'kode_barang' => 'Kode Barang Harus Diisi',
            'merk' => ' Merk Harus Diisi',
            'tahun' => 'Tahun Harus Diisi',
            'asal_cara' => ' Asal Cara Harus Diisi',
            'kondisi' => 'Kondisi Harus Diisi',
            'ket' => 'Keterangan Harus Diisi',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $dtBarang = new Data();
        $dtBarang->nama_barang = $request->nama_barang;
        $dtBarang->kode_barang = $request->kode_barang;
        $dtBarang->merk = $request->merk;
        $dtBarang->tahun = $request->tahun;
        $dtBarang->asal_cara = $request->asal_cara;
        $dtBarang->kondisi = $request->kondisi;
        $dtBarang->ket = $request->ket;

        $dtBarang->save();
        return redirect('data-barang')->with('succes', 'Data Barang Berhasil Ditambah');
        
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
        $dt = Data::findorfail($id);
        return view('Data.edit-data', compact('dt'));
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
        $dt = Data::findorfail($id);
        $dt->update($request->all());
        return redirect('data-barang')->with('succes', 'Data Barang Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dt = Data::findorfail($id);
        $dt->delete();
        return back()->with('info', 'Data Barang Berhasil Dihapus');;
    }
}
