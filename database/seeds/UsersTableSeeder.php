<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * users seeder
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Kevin',
            'lastname' => 'Picalausa',
            'email' => 'kevin.picalausa@odisee.be',
            'address' => 'Gent, Belgium',
            'password' => bcrypt('Azerty123'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'firstname' => 'Joris',
            'lastname' => 'Maervoet',
            'email' => 'joris.maervoet@odisee.be',
            'address' => 'Kruibeke, Belgium',
            'password' => bcrypt('Azerty123'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'firstname' => 'Victor',
            'lastname' => 'Declercq',
            'email' => 'victor.declercq@student.odisee.be',
            'address' => 'Brugge, Belgium',
            'password' => bcrypt('Azerty123'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'firstname' => 'Jan',
            'lastname' => 'Janssens',
            'email' => 'jan.janssens@odisee.be',
            'address' => 'Boom, Belgium',
            'password' => bcrypt('Azerty123'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
