<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $primaryKey = "id";

    protected $fillable =[
        'id',
        'nama_barang', 
        'kode_barang',
        'merk',
        'tahun',
        'asal_cara',
        'kondisi',
        'ket',
    ];

    public $timestamps = false;
}
