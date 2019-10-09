<?php

use Illuminate\Database\Seeder;

class MasterAkuntingTableDataSeeder extends Seeder
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
        DB::table('master_akun')->truncate();
        DB::table('master_akun')->insert([
            ['kode' => 'AC_0001', 'main_akun' => '101', 'sub_akun' => '001', 'keterangan' => 'Bank Pusat', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '10', ],
            ['kode' => 'AC_0002', 'main_akun' => '102', 'sub_akun' => '001', 'keterangan' => 'Kas', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '20', ],
            ['kode' => 'AC_0003', 'main_akun' => '201', 'sub_akun' => '001', 'keterangan' => 'Tanah & Bangunan', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '30', ],
            ['kode' => 'AC_0004', 'main_akun' => '202', 'sub_akun' => '001', 'keterangan' => 'Kendaraan', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '40', ],
            ['kode' => 'AC_0005', 'main_akun' => '203', 'sub_akun' => '010', 'keterangan' => 'Barang Seni / Hiasan', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '50', ],
            ['kode' => 'AC_0006', 'main_akun' => '203', 'sub_akun' => '020', 'keterangan' => 'Perabot Villa', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '60', ],
            ['kode' => 'AC_0007', 'main_akun' => '203', 'sub_akun' => '030', 'keterangan' => 'Perabot Dapur', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '70', ],
            ['kode' => 'AC_0008', 'main_akun' => '203', 'sub_akun' => '040', 'keterangan' => 'Peralatan Kamar Mandi', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '80', ],
            ['kode' => 'AC_0009', 'main_akun' => '203', 'sub_akun' => '050', 'keterangan' => 'Peralatan Masak', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '90', ],
            ['kode' => 'AC_0010', 'main_akun' => '203', 'sub_akun' => '060', 'keterangan' => 'Perangkat Elektronik', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '100', ],
            ['kode' => 'AC_0011', 'main_akun' => '203', 'sub_akun' => '070', 'keterangan' => 'Linen', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '110', ],
            ['kode' => 'AC_0012', 'main_akun' => '203', 'sub_akun' => '080', 'keterangan' => 'Peralatan Makan/Minum', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '120', ],
            ['kode' => 'AC_0013', 'main_akun' => '203', 'sub_akun' => '090', 'keterangan' => 'Peralatan Maintenance', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '130', ],
            ['kode' => 'AC_0014', 'main_akun' => '203', 'sub_akun' => '100', 'keterangan' => 'Amenities', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '140', ],
            ['kode' => 'AC_0015', 'main_akun' => '203', 'sub_akun' => '110', 'keterangan' => 'Peralatan Admin', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '150', ],
            ['kode' => 'AC_0016', 'main_akun' => '203', 'sub_akun' => '120', 'keterangan' => 'Lain-lain', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '160', ],
            ['kode' => 'AC_0017', 'main_akun' => '204', 'sub_akun' => '010', 'keterangan' => 'Bahan Makanan & Minuman', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '170', ],
            ['kode' => 'AC_0018', 'main_akun' => '204', 'sub_akun' => '020', 'keterangan' => 'Barang Habis Pakai', 'debet_kredit' => 'D', 'jenis_akun' => 'A', 'no_urut' => '180', ],
        ]);

        $this->enableForeignKeys();
    }
}
