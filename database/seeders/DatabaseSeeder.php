<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
        ]);

        $this->call(BukuSeeder::class);
        $this->call(BabSeeder::class);
        $this->call(PasalSeeder::class);
        $this->call(TfidfSeeder::class);
        // $this->call(ImportPasalSeeder::class);
    }
}
