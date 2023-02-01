<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;

    protected $table = "formulir";

    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'bidang',
        'nama',
        'nip',
        'nama_barang',
        'kode_barang',
        'jumlah',
        'tglkembali',
    ];

    public function statusss() {
        return $this->belongsTo('App\Models\StatusForm', 'status');
    }
}
