<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class StoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'name' => 'ORGANIC PRODUCTS',
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
        DB::table('stores')->insert([
            'name' => 'CONVENTIONAL PRODUCTS',
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
    }
}
