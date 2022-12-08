<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '東京都'
        ];
        Address::create($param);


        $param = [
            'name' => '大阪府'
        ];
        Address::create($param);

        $param = [
            'name' => '福岡県'
        ];
        Address::create($param);
        
    }
}
