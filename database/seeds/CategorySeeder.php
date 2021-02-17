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
            'ct_name' => 'ORGANIC ESSENTIAL OIL',
            'ct_description' => 'MRT Organic essential oils are produced from plants that are grown  without the use of pesticides or herbicides in accordance with organic agricultural standards. In addition, there are oils distilled from wild-crafted plants.   A careful distillation process and Organic Agricultural standards ensure the quality of Organic Essential oils are superior to Non Organic Oil and its therapeutic values are  excellent than conventional oils.  MRT’s  Organic Essential oils has been certified by LACON Quality of Germany, –  an Accredited Certifying agency of Agricultural and Processed Food Products Export Development Agency, Government of India.  All essential oils are Certified Under NPOP, EU and NOP Standards.',
            'ct_sp_slno' => 1,
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
        DB::table('categories')->insert([
            'ct_name' => 'ORGANIC HERBS',
            'ct_description' => 'MRT Organic essential oils are produced from plants that are grown  without the use of pesticides or herbicides in accordance with organic agricultural standards. In addition, there are oils distilled from wild-crafted plants.   A careful distillation process and Organic Agricultural standards ensure the quality of Organic Essential oils are superior to Non Organic Oil and its therapeutic values are  excellent than conventional oils.  MRT’s  Organic Essential oils has been certified by LACON Quality of Germany, –  an Accredited Certifying agency of Agricultural and Processed Food Products Export Development Agency, Government of India.  All essential oils are Certified Under NPOP, EU and NOP Standards.',
            'ct_sp_slno' => 2,
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
        DB::table('categories')->insert([
            'ct_name' => 'ORGANIC SPICES',
            'ct_description' => 'MRT Organic essential oils are produced from plants that are grown  without the use of pesticides or herbicides in accordance with organic agricultural standards. In addition, there are oils distilled from wild-crafted plants.   A careful distillation process and Organic Agricultural standards ensure the quality of Organic Essential oils are superior to Non Organic Oil and its therapeutic values are  excellent than conventional oils.  MRT’s  Organic Essential oils has been certified by LACON Quality of Germany, –  an Accredited Certifying agency of Agricultural and Processed Food Products Export Development Agency, Government of India.  All essential oils are Certified Under NPOP, EU and NOP Standards.',
            'ct_sp_slno' => 1,
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
    }
}
