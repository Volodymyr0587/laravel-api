<?php

namespace Database\Seeders;

use App\Models\Version;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Version::factory()->count(10)->create();
    }
}
