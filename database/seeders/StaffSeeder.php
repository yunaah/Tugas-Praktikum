<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Staffseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Staff::factory(8)->create();
    }
}
