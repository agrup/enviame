<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\empresa;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::factory(20)->create();
    }
}
