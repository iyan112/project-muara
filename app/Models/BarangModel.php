<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    protected $fillable= [
        'nama_barang',
        'harga_barang',
        'deskripsi',
        'stok',
        'nama_kategori',

    ];
    public $timestamps = false;

}

