<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    // hubungi dengantabel kategoriproduk
    protected $table = 'kategori_produk';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama',             // Nama produk     
    ];

     // Definisi relasi "has many" dengan model Produk
     public function produk()
     {
         return $this->hasMany(Produk::class);
     }
}
