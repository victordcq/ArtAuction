<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * types seeder.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('types')->insert([
            'name' => 'All',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        //2
        DB::table('types')->insert([
            'name' => 'statue',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        //3
        DB::table('types')->insert([
            'name' => 'mask',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        //4
        DB::table('types')->insert([
            'name' => 'drawing',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        //5
        DB::table('types')->insert([
            'name' => 'painting',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        //6
        DB::table('types')->insert([
            'name' => 'prints',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        //7
        DB::table('types')->insert([
            'name' => 'other',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }


}
