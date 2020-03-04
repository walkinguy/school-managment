<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class NoticesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('notices')->insert([
                'category' => $faker->city,
                'title' => $faker->word,
                'description' => $faker->jobTitle,
                'file' => $faker->word,
            ]);
        }
    }
}
