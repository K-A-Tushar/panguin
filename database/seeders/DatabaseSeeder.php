<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Division;
use App\Models\Thana;
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
        User::factory(10)->create();

        // check examole table if not empty then delete and create new
        $this->call([
            ExamoleSeeder::class,
        ]);
        
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // ...................
        

        // Division district thana seeder data create

        // if (Division::count() == 0) {
        //     Division::factory(10)->create();
        // }

        // // Division থেকে 1-10 পর্যন্ত প্রতিটি ডিভিশনের জন্য ৩টি জেলা এবং প্রতিটি জেলার জন্য ৫টি থানার ফেক ডাটা তৈরি
        // Division::all()->each(function ($division) {
        //     District::factory(3)->create(['division_id' => $division->id])->each(function ($district) {
        //         $district->thanas()->createMany(Thana::factory(5)->make(['district_id' => $district->id])->toArray());
        //     });
        // });
    }
}
