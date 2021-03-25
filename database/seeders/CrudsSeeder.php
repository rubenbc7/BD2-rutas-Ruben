<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrudsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cruds')->insert([
            'codigo' => '246',
            'descripcion' => 'sopa',
            'cantidad' => '1',
            'precio' => '25'
        ]);
    }
}
