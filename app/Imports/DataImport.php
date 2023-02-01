<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Data([
            'nama_barang' => $row[1],
            'kode_barang' => $row[2],
            'merk' => $row[3],
            'tahun' => $row[4],
            'asal_cara' => $row[5],
            'kondisi' => $row[6],
            'ket' => $row[7],
        ]);
    }
}
