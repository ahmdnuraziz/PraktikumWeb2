<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Produk extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang terhubung dengan model ini
    protected $table = 'produk';

    public $timestamps = false;

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama', // Nama produk

    ];


    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class);
    }

    // buat fungsi unttuk nampili data produk
    public static function getAllProduk()
    {
        // return DB::table('produk')->get();

        // bikin query nampilin nama kategori
        $alldata = DB::table('produk')
            ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();
        return $alldata;
    }
}