<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'kode_barang'=>'NV001',
                'nama_barang'=>'Dignitate',
                'kategori_barang'=>'Novel',
                'harga'=>'120000',
                'qty'=>'20'

            ],
            [
                'kode_barang'=>'NV001',
                'nama_barang'=>'Ayat-ayat cinta',
                'kategori_barang'=>'Novel',
                'harga'=>'110000',
                'qty'=>'9'
            ],
            [
                'kode_barang'=>'NV003',
                'nama_barang'=>'Dilan',
                'kategori_barang'=>'Novel',
                'harga'=>'130000',
                'qty'=>'20'
            ],
            [
                'kode_barang'=>'NV004',
                'nama_barang'=>'Dear Nathan',
                'kategori_barang'=>'Novel',
                'harga'=>'150000',
                'qty'=>'17'
            ],
            [
                'kode_barang'=>'NV005',
                'nama_barang'=>'Turn On',
                'kategori_barang'=>'Novel',
                'harga'=>'110000',
                'qty'=>'30'
            ],
            [
                'kode_barang'=>'BE001',
                'nama_barang'=>'IPA XII',
                'kategori_barang'=>'Buku Edukasi',
                'harga'=>'200000',
                'qty'=>'30'
            ],
            [
                'kode_barang'=>'BE002',
                'nama_barang'=>'Fisika Cara Cepat',
                'kategori_barang'=>'Buku Edukasi',
                'harga'=>'230000',
                'qty'=>'32'
            ],
            [
                'kode_barang'=>'BE003',
                'nama_barang'=>'Smart Mathematic',
                'kategori_barang'=>'Buku Edukasi',
                'harga'=>'100000',
                'qty'=>'32'
            ],
            [
                'kode_barang'=>'BE004',
                'nama_barang'=>'Artificial Intellegence Book',
                'kategori_barang'=>'Buku Edukasi',
                'harga'=>'300000',
                'qty'=>'32'
            ],
            [
                'kode_barang'=>'BE005',
                'nama_barang'=>'Tentang Hukum Newton',
                'kategori_barang'=>'Buku Edukasi',
                'harga'=>'180000',
                'qty'=>'12'
            ],
            [
                'kode_barang'=>'E001',
                'nama_barang'=>'Sastra Indonesia',
                'kategori_barang'=>'Ensiklopedia',
                'harga'=>'90000',
                'qty'=>'32'
            ],
            [
                'kode_barang'=>'E002',
                'nama_barang'=>'Sejarah Nasional',
                'kategori_barang'=>'Ensiklopedia',
                'harga'=>'190000',
                'qty'=>'22'
            ],
            [
                'kode_barang'=>'E003',
                'nama_barang'=>'Ensiklopedia Antariksa',
                'kategori_barang'=>'Ensiklopedia',
                'harga'=>'110000',
                'qty'=>'30'
            ],
            [
                'kode_barang'=>'E004',
                'nama_barang'=>'Ensiklopedia Buya Hamka',
                'kategori_barang'=>'Ensiklopedia',
                'harga'=>'210000',
                'qty'=>'30'
            ],
            [
                'kode_barang'=>'E005',
                'nama_barang'=>'Ensiklopedia Dunia Fauna',
                'kategori_barang'=>'Ensiklopedia',
                'harga'=>'100000',
                'qty'=>'40',
            ],
            [
                'kode_barang'=>'BM001',
                'nama_barang'=>'Pemimpi(n)',
                'kategori_barang'=>'Buku Motivasi',
                'harga'=>'130000',
                'qty'=>'12',
            ],
            [
                'kode_barang'=>'BM002',
                'nama_barang'=>'Cita-Cinta',
                'kategori_barang'=>'Buku Motivasi',
                'harga'=>'110000',
                'qty'=>'12'
            ],
            [
                'kode_barang'=>'BM003',
                'nama_barang'=>'Think And Grow Rich',
                'kategori_barang'=>'Buku Motivasi',
                'harga'=>'230000',
                'qty'=>'10'
            ],
            [
                'kode_barang'=>'BM004',
                'nama_barang'=>'Sebuah Seni',
                'kategori_barang'=>'Buku Motivasi',
                'harga'=>'190000',
                'qty'=>'12'
            ],
            [
                'kode_barang'=>'BM005',
                'nama_barang'=>'Kamu terlalu banyak bercanda',
                'kategori_barang'=>'Buku Motivasi',
                'harga'=>'160000',
                'qty'=>'80'
            ]
            ];
            DB::table('barang')->insert($data);
        
    }
}
