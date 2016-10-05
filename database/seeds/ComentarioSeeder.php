<?php

use Illuminate\Database\Seeder;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Popula tabela comentario
        DB::table('comentarios')->delete();
    
        DB::insert('insert into comentarios(autor,texto) values(?,?)',array('Caio Assis','Look I am a test comment.'));
    
        DB::insert('insert into comentarios(autor,texto) values(?,?)',array('Wendel Serumano','This is going to be super crazy.'));
    
        DB::insert('insert into comentarios(autor,texto) values(?,?)',array(
            'André Souza','I am a master of Laravel and Angular.'));
    }
}
