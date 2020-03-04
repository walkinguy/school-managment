<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(NoticesTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
    }
}
