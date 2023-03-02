<?php

namespace Database\Seeders;

use App\Models\photos;
use App\Models\posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       photos::factory(10)->create();
       posts::factory(10)->create();
    }
}
