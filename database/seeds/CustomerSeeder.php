<?php

use Illuminate\Database\Seeder;
use \App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::query()->updateOrCreate([
            'email' => 'dat@gmail.com'
        ], [
            'name' => 'Tiến Đạt',
            'email' => 'dat@gmail.com',
            'password' => 'customer',
            'phone_number' => '0964777771',
            'address' => '23 Thanh Xuân, Hà Nội'
        ]);

        Customer::query()->updateOrCreate([
            'email' => 'bacviet@gmail.com'
        ], [
            'name' => 'Bắc Việt',
            'email' => 'bacviet@gmail.com',
            'password' => 'customer',
            'phone_number' => '0964733771',
            'address' => '43 Đông anh, Hà Nội'
        ]);


        Customer::query()->updateOrCreate([
            'email' => 'siha@gmail.com'
        ], [
            'name' => 'Sĩ Hà',
            'email' => 'siha@gmail.com',
            'password' => 'customer',
            'phone_number' => '096337371',
            'address' => 'Thanh hoá, Hà Nội'
        ]);


        Customer::query()->updateOrCreate([
            'email' => 'sihaa@gmail.com'
        ], [
            'name' => 'Ha Le',
            'email' => 'sihaa@gmail.com',
            'password' => 'customer',
            'phone_number' => '0934735033',
            'address' => 'Đông anh, Hà Nội'
        ]);


        Customer::query()->updateOrCreate([
            'email' => 'haha@gmail.com'
        ], [
            'name' => 'Ha Le2',
            'email' => 'haha@gmail.com',
            'password' => 'customer',
            'phone_number' => '0964734441',
            'address' => 'Bắc Cạn, Hà Nội'
        ]);


        Customer::query()->updateOrCreate([
            'email' => 'trungkien@gmail.com'
        ], [
            'name' => 'Trung kiên',
            'email' => 'trungkien@gmail.com',
            'password' => 'customer',
            'phone_number' => '09647333471',
            'address' => 'Thanh Xuân, Hà Nội'
        ]);

        Customer::query()->updateOrCreate([
            'email' => 'trungha@gmail.com'
        ], [
            'name' => 'Trung Ha',
            'email' => 'trungha@gmail.com',
            'password' => 'customer',
            'phone_number' => '0964733342',
            'address' => '23 Thanh Xuân, Hà Nội'
        ]);

        Customer::query()->updateOrCreate([
            'email' => 'yenhi@gmail.com'
        ], [
            'name' => 'Yến nhi',
            'email' => 'yenhi@gmail.com',
            'phone_number' => '0974223324',
            'password' => 'customer',
            'address' => 'Hạ long, Hà Nội'
        ]);

        Customer::query()->updateOrCreate([
            'email' => 'dat09@gmail.com'
        ], [
            'name' => 'Tiến Đạt',
            'email' => 'dat09@gmail.com',
            'password' => 'customer',
            'phone_number' => '093432242',
            'address' => 'Quảng Ninh, Hà Nội'
        ]);
    }
}
