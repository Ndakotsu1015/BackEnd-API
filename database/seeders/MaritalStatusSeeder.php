<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marital_statuses')->insert([
           
            ['name' => 'Single'], 
            ['name' => 'In a Ralationship'],
            
            ['name' => 'Engaged'],
            ['name' => 'Married'],
            
            ['name' => 'Complicated'],

            ['name' => 'Divorced'],

            ['name' => 'Widowed'],
        ]);
    }
}
