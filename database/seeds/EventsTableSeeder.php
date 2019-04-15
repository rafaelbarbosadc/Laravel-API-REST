<?php

use Illuminate\Database\Seeder;
use App\Events;
class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Events::truncate();

        $faker = \Faker\Factory::create();

        for($i=0;$i < 50; $i++) {
            Events::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'creator' => 1,
                'date' => '2019-04-14 09:32:00',
                'latitude' => -3.0925815,
                'longitude' => -60.0185099
            ]);
        }
    }
}
