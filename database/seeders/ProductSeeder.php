<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Xe Lắc',
                'price' => 300000,
                'created_at' => Carbon::now()
            ],[
                'id' => 2,
                'name' => 'Đồ chơi câu cá',
                'price' => 200000,
                'created_at' => Carbon::now()
            ],[
                'id' => 3,
                'name' => 'Bảng vẽ ',
                'price' => 30000,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name' => 'Xếp hình',
                'price' => 15000,
                'created_at' => Carbon::now()
            ],[
                'id' => 5,
                'name' => 'Ô tô',
                'price' => 45000,
                'created_at' => Carbon::now()
            ],[
                'id' => 6,
                'name' => 'Máy xúc',
                'price' => 24000,
                'created_at' => Carbon::now()
            ],[
                'id' => 7,
                'name' => 'Cần cẩu',
                'price' => 12000,
                'created_at' => Carbon::now()
            ],[
                'id' => 8,
                'name' => 'Máy bay',
                'price' => 34000,
                'created_at' => Carbon::now()
            ],[
                'id' => 9,
                'name' => 'Đĩa bay',
                'price' => 98000,
                'created_at' => Carbon::now()
            ],[
                'id' => 10,
                'name' => 'Lego xếp hình',
                'price' => 34685,
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
