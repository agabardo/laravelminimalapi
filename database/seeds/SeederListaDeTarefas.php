<?php

use Illuminate\Database\Seeder;

class SeederListaDeTarefas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ListaDeTarefas')->insert([
            'texto' => 'Comprar passagens aéreas.',
            'autor' => 'John doe',
            'status' => 'Concluido',
            'created_at' => date('Y-m-d h:i:s')
        ]);
        DB::table('ListaDeTarefas')->insert([
            'texto' => 'Reservar hotel.',
            'autor' => 'John doe',
            'status' => 'Concluido',
            'created_at' => date('Y-m-d h:i:s')
        ]);
    }
}
