<?php

use Illuminate\Database\Seeder;

class ThemLinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('linh_vucs')->insert([
        	['ten_linh_vuc' => 'Toán'],
        	['ten_linh_vuc' => 'Lí'],
        	['ten_linh_vuc' => 'Hóa']
        ]);
    }
}
