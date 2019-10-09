<?php

use Illuminate\Database\Seeder;

class PropertyTableDataSeeder extends Seeder
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
        DB::table('property')->truncate();
        // Add the master administrator, user id of 1
        App\Models\Villaapp\Property::create([
	            'kode' => 'L_0001',
	            'name' => 'Puri Jasmine'
        ]);
        App\Models\Villaapp\Property::create([
	            'kode' => 'L_0002',
	            'name' => 'Puri Lotus'
        ]);
        App\Models\Villaapp\Property::create([
	            'kode' => 'L_0003',
	            'name' => 'Puri Bougainville'
        ]);
        App\Models\Villaapp\Property::create([
                'kode' => 'L_0004',
                'name' => 'Café & Reception'
        ]);
        App\Models\Villaapp\Property::create([
                'kode' => 'L_0005',
                'name' => 'Public Area'
        ]);

        $this->enableForeignKeys();
    }
}
