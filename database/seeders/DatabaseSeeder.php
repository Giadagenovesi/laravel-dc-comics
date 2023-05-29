<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call([
        //     ComicsTableSeeder::class,
        //     AltroSeeder::class ecc.
        // ]); (questa mi chiama i automatico il seeder senza mettere nel comando --class, ed è utile quando ho più tabelle) e posso chiamare più seeder da fare partire
    }
}
