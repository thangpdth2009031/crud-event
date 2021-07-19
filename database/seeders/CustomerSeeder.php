<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('customers')->truncate();
        DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'Thắng',
                'address' => 'Đà Lạt',
                'created_at' => Carbon::now()
            ],[
                'id' => 2,
                'name' => 'Nhật',
                'address' => 'Thái Bình',
                'created_at' => Carbon::now()
            ],[
                'id' => 3,
                'name' => 'Phương',
                'address' => 'Hải Phòng',
                'created_at' => Carbon::now()
            ],[
                'id' => 4,
                'name' => 'Hiếu',
                'address' => 'Hà Nội',
                'created_at' => Carbon::now()
            ],[
                'id' => 5,
                'name' => 'Thảo',
                'address' => 'Thái Lan',
                'created_at' => Carbon::now()
            ]

        ]);
    }
}
