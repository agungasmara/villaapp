<?php

use Illuminate\Database\Seeder;

class SupplierTableDataSeeder extends Seeder
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
        DB::table('supplier')->truncate();
        DB::table('supplier')->insert([
            ['name' => 'Umum', 'alamat' => 'Denpasar Bali', 'kontak' => '080989999','kontak_person' => 'dode' ]
        ]);
        $this->enableForeignKeys();
    }
}
