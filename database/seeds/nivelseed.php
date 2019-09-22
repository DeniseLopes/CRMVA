<?php

use Illuminate\Database\Seeder;
use DB;

class nivelseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nivel')->insert(
            [
                'id' => 1,
                'nome' => 'Administrador',

            ],
            [
                'id' => 2,
                'nome' => 'Operador',

            ]
        );
    }
}
