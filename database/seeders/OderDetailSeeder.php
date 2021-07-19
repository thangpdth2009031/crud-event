<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
            [
                'orderId' => 1,
                'productId' => 3,
                'quantity' => 3,
                'amount' => 90000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 1,
                'productId' => 1,
                'quantity' => 10,
                'amount' => 200000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 1,
                'productId' => 3,
                'quantity' => 5,
                'amount' => 150000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 3,
                'productId' => 5,
                'quantity' => 20,
                'amount' => 400000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 5,
                'productId' => 10,
                'quantity' => 30,
                'amount' => 570000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 7,
                'productId' => 9,
                'quantity' => 50,
                'amount' => 125000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 7,
                'productId' => 7,
                'quantity' => 1,
                'amount' => 50000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 7,
                'productId' => 8,
                'quantity' => 3,
                'amount' => 18000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 2,
                'productId' => 6,
                'quantity' => 1,
                'amount' => 16,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 2,
                'productId' => 2,
                'quantity' => 20,
                'amount' => 200000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 6,
                'productId' => 3,
                'quantity' => 6,
                'amount' => 180000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 4,
                'productId' => 4,
                'quantity' => 100,
                'amount' => 1300000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 4,
                'productId' => 5,
                'quantity' => 20,
                'amount' => 400000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 6,
                'productId' => 8,
                'quantity' => 5,
                'amount' => 30000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 6,
                'productId' => 9,
                'quantity' => 20,
                'amount' => 50000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 9,
                'productId' => 3,
                'quantity' => 5,
                'amount' => 150000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 9,
                'productId' => 6,
                'quantity' => 3,
                'amount' => 48000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 8,
                'productId' => 10,
                'quantity' => 10,
                'amount' => 190000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 8,
                'productId' => 1,
                'quantity' => 2,
                'amount' => 40000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 10,
                'productId' => 1,
                'quantity' => 5,
                'amount' => 100000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 10,
                'productId' => 2,
                'quantity' => 1,
                'amount' => 10000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 5,
                'productId' => 1,
                'quantity' => 1,
                'amount' => 20000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 5,
                'productId' => 3,
                'quantity' => 1,
                'amount' => 30000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 10,
                'productId' => 3,
                'quantity' => 3,
                'amount' => 90000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 10,
                'productId' => 6,
                'quantity' => 1,
                'amount' => 16000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 2,
                'productId' => 8,
                'quantity' => 1,
                'amount' => 6000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 2,
                'productId' => 10,
                'quantity' => 7,
                'amount' => 133000,
                'created_at' => Carbon::now()
            ],
            [
                'orderId' => 6,
                'productId' => 1,
                'quantity' => 30,
                'amount' => 600000,
                'created_at' => Carbon::now()
            ],[
                'orderId' => 6,
                'productId' => 2,
                'quantity' => 25,
                'amount' => 250000,
                'created_at' => Carbon::now()
            ],[
                'orderId' => 8,
                'productId' => 5,
                'quantity' => 3,
                'amount' => 60000,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
