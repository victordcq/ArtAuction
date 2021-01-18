<?php

use Illuminate\Database\Seeder;
use App\Item;

class OffersTableSeeder extends Seeder
{
    /**
     * offers seeder
     *
     * @return void
     */
    public function run()
    {
        $one = Item::all()[3];
        $one->offers()->attach([2 =>['price'=>11111]]);
		$randomDate = date('Y-m-d H:i:s', mt_rand(1262055681,1645619256));
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);

        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        DB::table('offers')->insert([
            'price' => rand(10,500),           
            'user_id' => rand(1,4),
            'item_id' => rand(1,20),
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ]);
        
        
		
    }
}
