<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = "form";

    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'nama',
        'bidang',
        'nip',
        'nama_barang',
        'kode_barang',
        'jumlah',
        'tglpinjam',
    ];

    public function statuss() {
        return $this->belongsTo('App\Models\Status', 'status');
    }

}
