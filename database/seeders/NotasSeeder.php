<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')-> insert ([
             'titulo'=> '¿pa q sirve composer?',
             'contenido' => 'esto es un texto miajua miajua aaaaaaaaaa'
        ]);

        DB::table('notas')-> insert([
            'titulo' => 'Instalacion de Laravel',
            'contenido' => ' mucho texto miajua'
        ]);
    }
}
