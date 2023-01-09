<?php

namespace Database\Seeders;
use App\Models\LocationRegion;
use Illuminate\Database\Seeder;

class LocationRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LocationRegion::create(['name' => 'NORTH']); 
        LocationRegion::create(['name' => 'EAST']); 
        LocationRegion::create(['name' => 'LAGOS 2B']); 
        LocationRegion::create(['name' => 'WEST']); 
        LocationRegion::create(['name' => 'LAGOS 2A']); 
        LocationRegion::create(['name' => 'LAGOS 1']); 
    }
}
