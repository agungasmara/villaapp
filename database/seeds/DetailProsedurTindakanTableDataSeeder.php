<?php

use Illuminate\Database\Seeder;

class DetailProsedurTindakanTableDataSeeder extends Seeder
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
    	DB::table('sop_detail_tindakan')->truncate();
		DB::table('sop_detail_tindakan')->insert([
			['id' => '1', 'kode' => 'DDP_0201_001_01', 'keterangan' => 'Nama tamu', 'id_sop_detail' => '11', 'no_urut' => '10', ],
			['id' => '2', 'kode' => 'DDP_0201_001_02', 'keterangan' => 'Lokasi penjemputan', 'id_sop_detail' => '11', 'no_urut' => '20', ],
			['id' => '3', 'kode' => 'DDP_0201_001_03', 'keterangan' => 'Waktu penjemputan', 'id_sop_detail' => '11', 'no_urut' => '30', ],
			['id' => '4', 'kode' => 'DDP_0201_001_04', 'keterangan' => 'Nomor penerbangan / KA', 'id_sop_detail' => '11', 'no_urut' => '40', ],
			['id' => '5', 'kode' => 'DDP_0201_001_05', 'keterangan' => 'Jumlah tamu dalam kelompok', 'id_sop_detail' => '11', 'no_urut' => '50', ],
			['id' => '6', 'kode' => 'DDP_0201_002_01', 'keterangan' => 'Mobil milik Villa', 'id_sop_detail' => '12', 'no_urut' => '60', ],
			['id' => '7', 'kode' => 'DDP_0201_002_02', 'keterangan' => 'Mobil Sewa', 'id_sop_detail' => '12', 'no_urut' => '70', ],
			['id' => '8', 'kode' => 'DDP_0201_003_01', 'keterangan' => 'Kelengkapan surat2', 'id_sop_detail' => '13', 'no_urut' => '80', ],
			['id' => '9', 'kode' => 'DDP_0201_003_02', 'keterangan' => 'Peralatan emergency', 'id_sop_detail' => '13', 'no_urut' => '90', ],
			['id' => '10', 'kode' => 'DDP_0201_003_03', 'keterangan' => 'Penampilan', 'id_sop_detail' => '13', 'no_urut' => '100', ],
			['id' => '11', 'kode' => 'DDP_0201_003_04', 'keterangan' => 'Kondisi mesin', 'id_sop_detail' => '13', 'no_urut' => '110', ],
			['id' => '12', 'kode' => 'DDP_0201_003_05', 'keterangan' => 'AC', 'id_sop_detail' => '13', 'no_urut' => '120', ],
			['id' => '13', 'kode' => 'DDP_0201_003_06', 'keterangan' => 'Kebersihan eksterior', 'id_sop_detail' => '13', 'no_urut' => '130', ],
			['id' => '14', 'kode' => 'DDP_0201_003_07', 'keterangan' => 'Kebersihan interior ', 'id_sop_detail' => '13', 'no_urut' => '140', ],
			['id' => '15', 'kode' => 'DDP_0201_003_08', 'keterangan' => 'Bau dalam mobil', 'id_sop_detail' => '13', 'no_urut' => '150', ],
			['id' => '16', 'kode' => 'DDP_0501_001_01', 'keterangan' => 'Nama tamu', 'id_sop_detail' => '75', 'no_urut' => '160', ],
			['id' => '17', 'kode' => 'DDP_0501_001_02', 'keterangan' => 'Lokasi tujuan', 'id_sop_detail' => '75', 'no_urut' => '170', ],
			['id' => '18', 'kode' => 'DDP_0501_001_03', 'keterangan' => 'Waktu tiba di tujuan', 'id_sop_detail' => '75', 'no_urut' => '180', ],
			['id' => '19', 'kode' => 'DDP_0501_001_04', 'keterangan' => 'Nomor penerbangan / KA', 'id_sop_detail' => '75', 'no_urut' => '190', ],
			['id' => '20', 'kode' => 'DDP_0501_001_05', 'keterangan' => 'Jumlah tamu dalam kelompok', 'id_sop_detail' => '75', 'no_urut' => '200', ],
			['id' => '21', 'kode' => 'DDP_0501_002_01', 'keterangan' => 'Mobil milik Villa', 'id_sop_detail' => '76', 'no_urut' => '210', ],
			['id' => '22', 'kode' => 'DDP_0501_002_02', 'keterangan' => 'Mobil Sewa', 'id_sop_detail' => '76', 'no_urut' => '220', ],
			['id' => '23', 'kode' => 'DDP_0501_003_01', 'keterangan' => 'Kelengkapan surat2', 'id_sop_detail' => '76', 'no_urut' => '230', ],
			['id' => '24', 'kode' => 'DDP_0501_003_02', 'keterangan' => 'Peralatan emergency', 'id_sop_detail' => '76', 'no_urut' => '240', ],
			['id' => '25', 'kode' => 'DDP_0501_003_03', 'keterangan' => 'Penampilan', 'id_sop_detail' => '76', 'no_urut' => '250', ],
			['id' => '26', 'kode' => 'DDP_0501_003_04', 'keterangan' => 'Kondisi mesin', 'id_sop_detail' => '76', 'no_urut' => '260', ],
			['id' => '27', 'kode' => 'DDP_0501_003_05', 'keterangan' => 'AC', 'id_sop_detail' => '76', 'no_urut' => '270', ],
			['id' => '28', 'kode' => 'DDP_0501_003_06', 'keterangan' => 'Kebersihan eksterior', 'id_sop_detail' => '76', 'no_urut' => '280', ],
			['id' => '29', 'kode' => 'DDP_0501_003_07', 'keterangan' => 'Kebersihan interior ', 'id_sop_detail' => '76', 'no_urut' => '290', ],
			['id' => '30', 'kode' => 'DDP_0501_003_08', 'keterangan' => 'Bau dalam mobil', 'id_sop_detail' => '76', 'no_urut' => '300', ],
			['id' => '31', 'kode' => 'DDP_0602_003_01', 'keterangan' => 'Tanggal', 'id_sop_detail' => '108', 'no_urut' => '310', ],
			['id' => '32', 'kode' => 'DDP_0602_003_02', 'keterangan' => 'Jam mulai', 'id_sop_detail' => '108', 'no_urut' => '320', ],
			['id' => '33', 'kode' => 'DDP_0602_003_03', 'keterangan' => 'Jam selesai', 'id_sop_detail' => '108', 'no_urut' => '330', ],
			['id' => '34', 'kode' => 'DDP_0602_003_04', 'keterangan' => 'Lokasi hama ditemukan', 'id_sop_detail' => '108', 'no_urut' => '340', ],
			['id' => '35', 'kode' => 'DDP_0602_003_05', 'keterangan' => 'Staf', 'id_sop_detail' => '108', 'no_urut' => '350', ],
			['id' => '36', 'kode' => 'DDP_0602_003_06', 'keterangan' => 'Tanda tangan', 'id_sop_detail' => '108', 'no_urut' => '360', ],
		]);
		 
        $this->enableForeignKeys();
        //
    }
}
