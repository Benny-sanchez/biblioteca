<?php

use App\Models\Permiso;
use Illuminate\Database\Seeder;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //invocando el modelfactory de permiso
        factory(Permiso::class,10)->create();
    }
}
