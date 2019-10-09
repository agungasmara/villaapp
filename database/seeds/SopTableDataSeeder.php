<?php

use Illuminate\Database\Seeder;
//use Spatie\Permission\Models\Sop;

class SopTableDataSeeder extends Seeder
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
    	DB::table('sop')->truncate();
    	
    	//Action dimulai
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0101',
            'nama_prosedur' => 'Menerima Reservasi melalui e-Mail / Website',
            'rutin' => 'T',
            'rutinitas' => '1',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0102',
            'nama_prosedur' => 'Menerima Reservasi melalui telepon',
            'rutin' => 'T',
            'rutinitas' => '1',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0103',
            'nama_prosedur' => 'Menjemput Tamu',
            'rutin' => 'T',
            'rutinitas' => '1',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0104',
            'nama_prosedur' => 'Check In untuk Walk-In Guest',
            'rutin' => 'T',
            'rutinitas' => '1',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0105',
            'nama_prosedur' => 'Check In untuk Tamu yg sudah reservasi',
            'rutin' => 'T',
            'rutinitas' => '1',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0106',
            'nama_prosedur' => 'Check out',
            'rutin' => 'T',
            'rutinitas' => '1',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0107',
            'nama_prosedur' => 'Mengantar Tamu',
            'rutin' => 'T',
            'rutinitas' => '1',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0108',
            'nama_prosedur' => 'House Keeping Harian',
            'rutin' => 'Y',
            'rutinitas' => '1',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0109',
            'nama_prosedur' => 'Pest Control (Rodentisida / Insektisida / Fumigasi',
            'rutin' => 'Y',
            'rutinitas' => '30',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0110',
            'nama_prosedur' => 'Laundry',
            'rutin' => 'Y',
            'rutinitas' => '1',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0111',
            'nama_prosedur' => 'Pemeliharaan Bangunan & Fasilitas 1 bulanan',
            'rutin' => 'Y',
            'rutinitas' => '30',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0112',
            'nama_prosedur' => 'Pemeliharaan Bangunan & Fasilitas 4 bulanan',
            'rutin' => 'Y',
            'rutinitas' => '120',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0113',
            'nama_prosedur' => 'Pemeliharaan Bangunan & Fasilitas 2 tahunan',
            'rutin' => 'Y',
            'rutinitas' => '720',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0114',
            'nama_prosedur' => 'Pemeliharaan Bangunan & Fasilitas 3 tahunan',
            'rutin' => 'T',
            'rutinitas' => '',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0115',
            'nama_prosedur' => 'Pemeliharaan Bangunan & Fasilitas Kerusakan Membahayakan',
            'rutin' => 'T',
            'rutinitas' => '',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0116',
            'nama_prosedur' => 'Pemeliharaan Bangunan & Fasilitas Kerusakan Mengganggu Kenyamanan',
            'rutin' => 'T',
            'rutinitas' => '',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        App\Models\Villaapp\Sop::create([
            'kode' => 'p0117',
            'nama_prosedur' => 'Pemeliharaan Bangunan & Fasilitas Kerusakan Tidak Terlalu Mengganggu',
            'rutin' => 'T',
            'rutinitas' => '',
            'no_urut' => '1',
            'konfirmasi' => 'T',
        ]);
        $this->enableForeignKeys();
    }
}
