<?php
/**
 * Created by PhpStorm.
 * User: MarioAsus
 * Date: 22/01/2018
 * Time: 18:41
 */

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
            array('name'=>'Mario','email'=>'mario@mario.com','password'=>'123456','rol'=>'alumne'),
            array('name'=>'Admin','email'=>'admin@admin.com','password'=>'123456','rol'=>'professor'),
        ));
    }
}