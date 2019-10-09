<?php

use Illuminate\Database\Seeder;

class BarangTableDataSeeder extends Seeder
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
        DB::table('barang')->truncate();

        $this->enableForeignKeys();
    }
}
