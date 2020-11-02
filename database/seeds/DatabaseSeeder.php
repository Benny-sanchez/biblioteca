<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this -> truncateTables(['rol', 'permiso']); //la tabla a truncar
        //se llama a la clase para ejecutar la funcion run de TablaRolSeeder
        $this -> call(TablaRolSeeder::class);
        $this -> call(TablaPermisoSeeder::class);
    }

    protected function truncateTables(array $tablas){
        DB::statement ('SET FOREIGN_KEY_CHECKS = 0;');// se deshabilita el chequeo de llave foranea para truncar la tabla
        foreach($tablas as $tabla){
            DB::table($tabla) -> truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
