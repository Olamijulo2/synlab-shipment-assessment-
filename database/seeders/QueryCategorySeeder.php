<?php

namespace Database\Seeders;
use App\Models\QueryCategory;

use Illuminate\Database\Seeder;

class QueryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QueryCategory::create(['name' => 'No Test Indicated']); 
        QueryCategory::create(['name' => 'Shipping Batch Not Received']); 
        QueryCategory::create(['name' => 'Bar Code Mixup']); 
        QueryCategory::create(['name' => 'Unlabelled Specimen']); 
        QueryCategory::create(['name' => 'No Sample Received']); 
        QueryCategory::create(['name' => 'Heamolysed Sample']); 
        QueryCategory::create(['name' => 'Broken Tube']); 
        QueryCategory::create(['name' => 'Wrong Collection Bottle/Container']); 
        QueryCategory::create(['name' => 'No Complete Biodata On Sample']); 
        QueryCategory::create(['name' => 'No Bar Code On Sample']); 
        QueryCategory::create(['name' => 'Sipllage/Empty Tube']); 
        QueryCategory::create(['name' => 'Un-seperated Sample']); 
        QueryCategory::create(['name' => 'Wrong Sample Received']); 
        QueryCategory::create(['name' => 'Insufficient Sample']); 
        QueryCategory::create(['name' => 'No Sample Type Stated']); 
        QueryCategory::create(['name' => 'Test Not Orderable']); 
        QueryCategory::create(['name' => 'Wrong Code Logged']); 
    }
}
