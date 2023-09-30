<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $this->call([
           UserSeeder::class
        ]);

        $this->call([
           HazelnutSeeder::class
        ]);

        $this->call([
            BlogSeeder::class
        ]);

        $this->call([
            CommentSeeder::class
        ]);

        $this->call([
            EventSeeder::class
        ]);
        $this->call([
            ParticipationSeeder::class
        ]);
        $this->call([
            OrganizationSeeder::class
        ]);
        $this->call([
            DonationSeeder::class
        ]);
        $this->call([
            ItemSeeder::class
        ]);
        $this->call([
            RequestSeeder::class
        ]);
    }
}
