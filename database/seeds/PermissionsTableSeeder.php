<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Kami
        DB::table('permissions')->insert([
            'name'=>'Permiso de kami',
            'slug'=>'kami.index',
            'description'=>'Restringir de forma logica el acceso a los componentes del sistema',
        ]);
    }
}


