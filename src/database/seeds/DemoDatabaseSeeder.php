<?php

namespace Demo\Database\Seeds;

use Illuminate\Database\Seeder;

class DemoDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DemoDbDatabaseSeeder::class,
        ]);
    }
}
