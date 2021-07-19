<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            [
                'id' => 1,
                'customerId' => 8,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'customerId' => 9,
                'created_at' => Carbon::now()->addDays(1)
            ],
            [
                'id' => 3,
                'customerId' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'customerId' => 1,
                'created_at' => Carbon::now()->addDays(1)
            ],
            [
                'id' => 5,
                'customerId' => 8,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'customerId' => 5,
                'created_at' => Carbon::now()->addDays(3)
            ],
            [
                'id' => 7,
                'customerId' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'customerId' => 4,
                'created_at' => Carbon::now()->addDays(4)
            ],
            [
                'id' => 9,
                'customerId' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'customerId' => 7,
                'created_at' => Carbon::now()->addDays(5)
            ],
        ]);
    }
}
