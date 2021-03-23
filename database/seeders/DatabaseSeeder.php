<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\empresa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Empresa::factory(20)->create();
    }
}
