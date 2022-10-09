<?php

use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\Cart::query()->create([
            'client_id' => 1,
            'status' => 'Thành công',
            'vat' => 10,
            'ship_price' => 20000,
            'total' => 300000,
            'note' => 'Giao nhanh giup minh',
        ]);

        \App\Models\Cart::query()->create([
            'client_id' => 2,
            'status' => 'Thành công',
            'vat' => 10,
            'ship_price' => 20000,
            'total' => 300000,
            'note' => 'Giao nhanh giup minh',
        ]);
    }
}
