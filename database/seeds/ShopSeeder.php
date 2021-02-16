<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop')->insert([
            'sp_name' => 'ORGANIC PRODUCTS',
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
        DB::table('shop')->insert([
            'sp_name' => 'CONVENTIONAL PRODUCTS',
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
    }
}
