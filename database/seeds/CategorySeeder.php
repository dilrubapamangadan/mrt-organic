<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'ORGANIC ESSENTIAL OIL',
            'description' => 'MRT Organic essential oils are produced from plants that are grown  without the use of pesticides or herbicides in accordance with organic agricultural standards. In addition, there are oils distilled from wild-crafted plants.   A careful distillation process and Organic Agricultural standards ensure the quality of Organic Essential oils are superior to Non Organic Oil and its therapeutic values are  excellent than conventional oils.  MRT’s  Organic Essential oils has been certified by LACON Quality of Germany, –  an Accredited Certifying agency of Agricultural and Processed Food Products Export Development Agency, Government of India.  All essential oils are Certified Under NPOP, EU and NOP Standards.',
            'store_id' => 1,
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
        DB::table('categories')->insert([
            'name' => 'ORGANIC HERBS',
            'description' => 'MRT Organic essential oils are produced from plants that are grown  without the use of pesticides or herbicides in accordance with organic agricultural standards. In addition, there are oils distilled from wild-crafted plants.   A careful distillation process and Organic Agricultural standards ensure the quality of Organic Essential oils are superior to Non Organic Oil and its therapeutic values are  excellent than conventional oils.  MRT’s  Organic Essential oils has been certified by LACON Quality of Germany, –  an Accredited Certifying agency of Agricultural and Processed Food Products Export Development Agency, Government of India.  All essential oils are Certified Under NPOP, EU and NOP Standards.',
            'store_id' => 2,
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
        DB::table('categories')->insert([
            'name' => 'ORGANIC SPICES',
            'description' => 'MRT Organic essential oils are produced from plants that are grown  without the use of pesticides or herbicides in accordance with organic agricultural standards. In addition, there are oils distilled from wild-crafted plants.   A careful distillation process and Organic Agricultural standards ensure the quality of Organic Essential oils are superior to Non Organic Oil and its therapeutic values are  excellent than conventional oils.  MRT’s  Organic Essential oils has been certified by LACON Quality of Germany, –  an Accredited Certifying agency of Agricultural and Processed Food Products Export Development Agency, Government of India.  All essential oils are Certified Under NPOP, EU and NOP Standards.',
            'store_id' => 1,
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
    }
}
