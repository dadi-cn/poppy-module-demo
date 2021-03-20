<?php

namespace Demo\Database\Seeds;

use Demo\Models\DemoDb;
use Illuminate\Database\Seeder;

class DemoDbDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(DemoDb::class, 50)->create();

    }
}
