<?php

namespace Database\Seeders;

use App\Http\Requests\EventValidatorFormRequest;
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
        $this->call([
            CustomerSeeder::class,
            EventSeeder::class,
            OderDetailSeeder::class,
            OderSeeder::class,
            ProductSeeder::class,
            ]);
    }
}
