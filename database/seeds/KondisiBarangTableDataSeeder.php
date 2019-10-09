<?php

use Illuminate\Database\Seeder;

class KondisiBarangTableDataSeeder extends Seeder
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
        DB::table('kondisi_barang')->truncate();
        DB::table('kondisi_barang')->insert([
            ['kode' => 'KO_0001', 'name' => 'Sangat Baik', ],
            ['kode' => 'KO_0002', 'name' => 'Baik', ],
            ['kode' => 'KO_0003', 'name' => 'Sedang', ],
            ['kode' => 'KO_0003', 'name' => 'Sedang', ],
            ['kode' => 'KO_0004', 'name' => 'Perlu Perbaikan', ],
            ['kode' => 'KO_0005', 'name' => 'Perlu Penggantian', ],
        ]);

        $this->enableForeignKeys();
    }
}
