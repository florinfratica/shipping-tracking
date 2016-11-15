<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('shippings')->get()->count() == 0) {
            DB::table('shippings')->insert([
                [
                    'tracking_code' => '1111',
                    'delivery_date' => '2016-11-17 20:10:00',
                ],
                [
                    'tracking_code' => '1112',
                    'delivery_date' => '2016-11-22 16:00:00',
                ],
                [
                    'tracking_code' => '1113',
                    'delivery_date' => '2016-11-16 18:45:00',
                ],
            ]);
        } else {
            echo 'Table is not empty!';
        }
    }
}
