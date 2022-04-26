<?php

namespace Database\Seeders;

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
        \App\Models\Usertwo::factory(1000)->create();
        // factory(App\Model\Usertwo::class,300)->create();
    }
}
