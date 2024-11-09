<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class FoundationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'foundation One',
                'email' => 'foundationone@example.com',
                'password' => bcrypt('12345678'),
                'slug' => Str::slug('foundation One'),
            ],
            [
                'name' => 'foundation Two',
                'email' => 'foundationtwo@example.com',
                'password' => bcrypt('12345678'),
                'slug' => Str::slug('foundation Two'),
            ],
            [
                'name' => 'foundation Three',
                'email' => 'foundationthree@example.com',
                'password' => bcrypt('12345678'),
                'slug' => Str::slug('foundation Three'),
            ],
            [
                'name' => 'foundation Four',
                'email' => 'foundationfour@example.com',
                'password' => bcrypt('12345678'),
                'slug' => Str::slug('foundation Four'),
            ],
            [
                'name' => 'foundation Five',
                'email' => 'foundationfive@example.com',
                'password' => bcrypt('12345678'),
                'slug' => Str::slug('foundation Five'),
            ],
        ]);
    }
}
