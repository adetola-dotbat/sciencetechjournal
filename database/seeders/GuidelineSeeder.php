<?php

namespace Database\Seeders;

use App\Models\Guideline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuidelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guideline::factory()->count(1)->create();
    }
}
