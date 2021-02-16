<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'pd_name' => 'AJOWAN OIL',
            'pd_description' => 'MRT Organic essential oils are produced from plants that are grown  without the use of pesticides or herbicides in accordance with organic agricultural standards. In addition, there are oils distilled from wild-crafted plants.   A careful distillation process and Organic Agricultural standards ensure the quality of Organic Essential oils are superior to Non Organic Oil and its therapeutic values are  excellent than conventional oils.  MRT’s  Organic Essential oils has been certified by LACON Quality of Germany, –  an Accredited Certifying agency of Agricultural and Processed Food Products Export Development Agency, Government of India.  All essential oils are Certified Under NPOP, EU and NOP Standards.',
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
        DB::table('products')->insert([
            'pd_name' => 'ANGELICA OIL',
            'pd_description' => 'MRT Organic essential oils are produced from plants that are grown  without the use of pesticides or herbicides in accordance with organic agricultural standards. In addition, there are oils distilled from wild-crafted plants.   A careful distillation process and Organic Agricultural standards ensure the quality of Organic Essential oils are superior to Non Organic Oil and its therapeutic values are  excellent than conventional oils.  MRT’s  Organic Essential oils has been certified by LACON Quality of Germany, –  an Accredited Certifying agency of Agricultural and Processed Food Products Export Development Agency, Government of India.  All essential oils are Certified Under NPOP, EU and NOP Standards.',
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
        DB::table('products')->insert([
            'pd_name' => 'BASIL OIL',
            'pd_description' => 'MRT Organic essential oils are produced from plants that are grown  without the use of pesticides or herbicides in accordance with organic agricultural standards. In addition, there are oils distilled from wild-crafted plants.   A careful distillation process and Organic Agricultural standards ensure the quality of Organic Essential oils are superior to Non Organic Oil and its therapeutic values are  excellent than conventional oils.  MRT’s  Organic Essential oils has been certified by LACON Quality of Germany, –  an Accredited Certifying agency of Agricultural and Processed Food Products Export Development Agency, Government of India.  All essential oils are Certified Under NPOP, EU and NOP Standards.',
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
        DB::table('products')->insert([
            'pd_name' => 'BLACK CUMIN OIL',
            'pd_description' => 'MRT Organic essential oils are produced from plants that are grown  without the use of pesticides or herbicides in accordance with organic agricultural standards. In addition, there are oils distilled from wild-crafted plants.   A careful distillation process and Organic Agricultural standards ensure the quality of Organic Essential oils are superior to Non Organic Oil and its therapeutic values are  excellent than conventional oils.  MRT’s  Organic Essential oils has been certified by LACON Quality of Germany, –  an Accredited Certifying agency of Agricultural and Processed Food Products Export Development Agency, Government of India.  All essential oils are Certified Under NPOP, EU and NOP Standards.',
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
        DB::table('products')->insert([
            'pd_name' => 'BLACK PEPPER OIL',
            'pd_description' => 'MRT Organic essential oils are produced from plants that are grown  without the use of pesticides or herbicides in accordance with organic agricultural standards. In addition, there are oils distilled from wild-crafted plants.   A careful distillation process and Organic Agricultural standards ensure the quality of Organic Essential oils are superior to Non Organic Oil and its therapeutic values are  excellent than conventional oils.  MRT’s  Organic Essential oils has been certified by LACON Quality of Germany, –  an Accredited Certifying agency of Agricultural and Processed Food Products Export Development Agency, Government of India.  All essential oils are Certified Under NPOP, EU and NOP Standards.',
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
        DB::table('products')->insert([
            'pd_name' => 'CALAMUS OIL',
            'pd_description' => 'MRT Organic essential oils are produced from plants that are grown  without the use of pesticides or herbicides in accordance with organic agricultural standards. In addition, there are oils distilled from wild-crafted plants.   A careful distillation process and Organic Agricultural standards ensure the quality of Organic Essential oils are superior to Non Organic Oil and its therapeutic values are  excellent than conventional oils.  MRT’s  Organic Essential oils has been certified by LACON Quality of Germany, –  an Accredited Certifying agency of Agricultural and Processed Food Products Export Development Agency, Government of India.  All essential oils are Certified Under NPOP, EU and NOP Standards.',
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
        DB::table('products')->insert([
            'pd_name' => 'CARDOMOM OIL',
            'pd_description' => 'MRT Organic essential oils are produced from plants that are grown  without the use of pesticides or herbicides in accordance with organic agricultural standards. In addition, there are oils distilled from wild-crafted plants.   A careful distillation process and Organic Agricultural standards ensure the quality of Organic Essential oils are superior to Non Organic Oil and its therapeutic values are  excellent than conventional oils.  MRT’s  Organic Essential oils has been certified by LACON Quality of Germany, –  an Accredited Certifying agency of Agricultural and Processed Food Products Export Development Agency, Government of India.  All essential oils are Certified Under NPOP, EU and NOP Standards.',
            'created_at' => Carbon::today()->toDateString(),
            'updated_at' => Carbon::today()->toDateString()
        ]);
    }
}
