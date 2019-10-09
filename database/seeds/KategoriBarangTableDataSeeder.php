<?php

use Illuminate\Database\Seeder;

class KategoriBarangTableDataSeeder extends Seeder
{
	use DisableForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        DB::table('kategori_barang')->truncate();
        DB::table('kategori_barang')->insert([
            ['kode' => 'KB_0001', 'name' => 'Tanah & Bangunan', 'id_master_akun' => '3', ],
            ['kode' => 'KB_0002', 'name' => 'Kendaraan', 'id_master_akun' => '4', ],
            ['kode' => 'KB_0003', 'name' => 'Barang Seni / Hiasan', 'id_master_akun' => '5', ],
            ['kode' => 'KB_0004', 'name' => 'Perabot Villa', 'id_master_akun' => '6', ],
            ['kode' => 'KB_0005', 'name' => 'Perabot Dapur', 'id_master_akun' => '7', ],
            ['kode' => 'KB_0006', 'name' => 'Peralatan Kamar Mandi', 'id_master_akun' => '8', ],
            ['kode' => 'KB_0007', 'name' => 'Peralatan Masak', 'id_master_akun' => '9', ],
            ['kode' => 'KB_0008', 'name' => 'Perangkat Elektronik', 'id_master_akun' => '10', ],
            ['kode' => 'KB_0009', 'name' => 'Linen', 'id_master_akun' => '11', ],
            ['kode' => 'KB_0010', 'name' => 'Peralatan Makan/Minum', 'id_master_akun' => '12', ],
            ['kode' => 'KB_0011', 'name' => 'Peralatan Maintenance', 'id_master_akun' => '13', ],
            ['kode' => 'KB_0012', 'name' => 'Amenities', 'id_master_akun' => '14', ],
            ['kode' => 'KB_0090', 'name' => 'Peralatan Admin', 'id_master_akun' => '15', ],
            ['kode' => 'KB_0098', 'name' => 'Lain-lain', 'id_master_akun' => '16', ],
            ['kode' => 'KB_0100', 'name' => 'Bahan Makanan & Minuman', 'id_master_akun' => '17', ],
            ['kode' => 'KB_0200', 'name' => 'Barang Habis Pakai', 'id_master_akun' => '18', ],
        ]);        

        $this->enableForeignKeys();
    }
}
