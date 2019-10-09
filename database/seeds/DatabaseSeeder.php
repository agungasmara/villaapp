<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        Model::unguard();

        $this->truncateMultiple([
            'cache',
            'failed_jobs',
            'ledgers',
            'jobs',
            'sessions',
        ]);

        $this->call(AuthTableSeeder::class);

        $this->call(BarangTableDataSeeder::class);
        $this->call(DetailProsedurTableDataSeeder::class);
        $this->call(DetailProsedurTindakanTableDataSeeder::class);
        $this->call(InventoryTableDataSeeder::class);
        $this->call(KategoriBarangTableDataSeeder::class);
        $this->call(KondisiBarangTableDataSeeder::class);
        $this->call(MasterAkuntingTableDataSeeder::class);
        $this->call(PropertyTableDataSeeder::class);
        $this->call(SopTableDataSeeder::class);        
        $this->call(SubPropertyTableDataSeeder::class);
        $this->call(SupplierTableDataSeeder::class);

        Model::reguard();
    }
}
