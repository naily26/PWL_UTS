<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Barang as Authenticatable; 
use Illuminate\Notifications\Notifiable; 

class Barang extends Model
{
    protected $table="barang"; 
    // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas 
    public $timestamps= false; 
    protected $primaryKey = 'id_barang'; // Memanggil isi DB Dengan primarykey 
    /** 
     * The attributes that are mass assignable.
     * 
     * 
     * * @var array */ 
    
     protected $fillable = [ 
         'kode_barang', 
         'nama_barang', 
         'kategori_barang',
         'harga', 
         'qty', 
        ];
}
