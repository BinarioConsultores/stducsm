<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_tipousuario')->insert(
        	['tusu_desc' => 'MP',],
        	['tusu_desc' => 'UC',],
        	['tusu_desc' => 'JD',],
        );
    }
}
