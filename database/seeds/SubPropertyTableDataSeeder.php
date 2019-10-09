<?php

use Illuminate\Database\Seeder;

class SubPropertyTableDataSeeder extends Seeder
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
        DB::table('sub_property')->truncate();
        DB::table('sub_property')->insert([
            ['kode' => 'SL_0101', 'name' => 'Kamar Master', 'id_property' => '1', ],
            ['kode' => 'SL_0102', 'name' => 'Kamar Twin', 'id_property' => '1', ],
            ['kode' => 'SL_0103', 'name' => 'Kamar Mandi Master', 'id_property' => '1', ],
            ['kode' => 'SL_0104', 'name' => 'Kamar Mandi Twin', 'id_property' => '1', ],
            ['kode' => 'SL_0105', 'name' => 'Ruang Keluarga', 'id_property' => '1', ],
            ['kode' => 'SL_0106', 'name' => 'Paragola Master', 'id_property' => '1', ],
            ['kode' => 'SL_0107', 'name' => 'Taman', 'id_property' => '1', ],
            ['kode' => 'SL_0108', 'name' => 'Kolam Renang', 'id_property' => '1', ],
            ['kode' => 'SL_0109', 'name' => 'Paragola Twin', 'id_property' => '1', ],
            ['kode' => 'SL_0201', 'name' => 'Kamar Master', 'id_property' => '2', ],
            ['kode' => 'SL_0202', 'name' => 'Kamar Twin', 'id_property' => '2', ],
            ['kode' => 'SL_0203', 'name' => 'Kamar Mandi Master', 'id_property' => '2', ],
            ['kode' => 'SL_0204', 'name' => 'Kamar Mandi Twin', 'id_property' => '2', ],
            ['kode' => 'SL_0205', 'name' => 'Ruang Keluarga', 'id_property' => '2', ],
            ['kode' => 'SL_0206', 'name' => 'Paragola Master', 'id_property' => '2', ],
            ['kode' => 'SL_0207', 'name' => 'Taman', 'id_property' => '2', ],
            ['kode' => 'SL_0208', 'name' => 'Kolam Renang', 'id_property' => '2', ],
            ['kode' => 'SL_0206', 'name' => 'Paragola Twin', 'id_property' => '2', ],
            ['kode' => 'SL_0301', 'name' => 'Kamar master', 'id_property' => '3', ],
            ['kode' => 'SL_0302', 'name' => 'Kamar Twin', 'id_property' => '3', ],
            ['kode' => 'SL_0303', 'name' => 'Kamar Mandi Master', 'id_property' => '3', ],
            ['kode' => 'SL_0304', 'name' => 'Kamar Mandi Twin', 'id_property' => '3', ],
            ['kode' => 'SL_0305', 'name' => 'Ruang Keluarga', 'id_property' => '3', ],
            ['kode' => 'SL_0306', 'name' => 'Taman', 'id_property' => '3', ],
            ['kode' => 'SL_0307', 'name' => 'Kolam Renang', 'id_property' => '3', ],
            ['kode' => 'SL_0308', 'name' => 'Bale Bengong', 'id_property' => '3', ],
            ['kode' => 'SL_4901', 'name' => 'Gudang', 'id_property' => '5', ],
            ['kode' => 'SL_4902', 'name' => 'Parkir', 'id_property' => '5', ],
            ['kode' => 'SL_4903', 'name' => 'Taman', 'id_property' => '5', ],
            ['kode' => 'SL_5011', 'name' => 'Café & Reception', 'id_property' => '4', ],
            ['kode' => 'SL_5012', 'name' => 'Dapur', 'id_property' => '4', ],
            ['kode' => 'SL_6011', 'name' => 'Gudang', 'id_property' => '5', ],
        ]);
        $this->enableForeignKeys();
    }
}
