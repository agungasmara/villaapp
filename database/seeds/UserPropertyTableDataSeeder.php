<?php

use Illuminate\Database\Seeder;
//use Spatie\Permission\Models\Sop;

class UserPropertyTableDataSeeder extends Seeder
{
	 use DisableForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//untuk mencegah foreign key violation active
    	$this->disableForeignKeys();    	
    	
    	//untuk remove table sebelum di update ke database
    	DB::table('user_property')->truncate();
    	
    	//Action dimulai
        App\Models\Villaapp\UserProperty::create([
            'id_user' => '1',
            'id_property' => '1',
            'keterangan' => 'tidak ada',
        ]);
        //Action dimulai
        App\Models\Villaapp\UserProperty::create([
            'id_user' => '1',
            'id_property' => '2',
            'keterangan' => 'tidak ada',
        ]);      //Action dimulai
        App\Models\Villaapp\UserProperty::create([
            'id_user' => '1',
            'id_property' => '3',
            'keterangan' => 'tidak ada',
        ]);      //Action dimulai
        App\Models\Villaapp\UserProperty::create([
            'id_user' => '1',
            'id_property' => '4',
            'keterangan' => 'tidak ada',
        ]);//Action dimulai
        App\Models\Villaapp\UserProperty::create([
            'id_user' => '1',
            'id_property' => '5',
            'keterangan' => 'tidak ada',
        ]);//Action dimulai
        App\Models\Villaapp\UserProperty::create([
            'id_user' => '2',
            'id_property' => '1',
            'keterangan' => 'tidak ada',
        ]);
        App\Models\Villaapp\UserProperty::create([
            'id_user' => '2',
            'id_property' => '2',
            'keterangan' => 'tidak ada',
        ]);
        App\Models\Villaapp\UserProperty::create([
            'id_user' => '3',
            'id_property' => '1',
            'keterangan' => 'tidak ada',
        ]);
        App\Models\Villaapp\UserProperty::create([
            'id_user' => '3',
            'id_property' => '2',
            'keterangan' => 'tidak ada',
        ]);
        $this->enableForeignKeys();
    }
}
