<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UserDatabaseSeeder::class,Lab406DatabaseSeeder::class]);
    }
}



class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
        DB::table('users')->delete();
        //insert some dummy records
        DB::table('users')->insert(array(
            array('name'=>'Mario','email'=>'mario@mario.com','password'=>Hash::make('123456'),'rol'=>'alumne'),
            array('name'=>'Admin','email'=>'admin@admin.com','password'=>Hash::make('123456'),'rol'=>'professor'),
        ));
    }
}


class Lab406DatabaseSeeder extends  Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
        DB::table('lab406')->delete();
        //insert some dummy records
        DB::table('lab406')->insert(array(
            array('localitzacio'=>'Armari A','nom'=>'Producte 1','quantitat_inicial'=>'100','quantitat_actual'=>'50','percentatge_minim'=>'10','proveidor'=>'mercadona','referencia_proveidor'=>'155','marca_equip'=>'naik','n_lot'=>'2'),
        ));
    }
}