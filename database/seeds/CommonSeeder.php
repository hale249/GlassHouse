<?php

use Illuminate\Database\Seeder;

class CommonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = [
            'Ghi',
            'Đen',
            'Trắng',
            'Nâu Cafe',
            'Đen'
        ];

        foreach ($colors as $color) {
            \App\Models\Color::query()->updateOrCreate([
                'name' => $color,
                'color' => $color,
            ], [
                'name' => $color,
                'color' => $color,
                'created_by' => 1,
            ]);
        }

        $glassTypes = [
            'Hộp',
            'Dán an toàn',
            'Cường lực',
        ];

        foreach ($glassTypes as $item) {
            \App\Models\GlassType::query()->updateOrCreate([
                'name' => $item,
            ], [
                'name' => $item,
                'created_by' => 1,
            ]);
        }


        $accessories = [
            'Roto',
            'Kinlong'
        ];

        foreach ($accessories as $item) {
            \App\Models\Accessory::query()->updateOrCreate([
                'name' => $item,
            ], [
                'name' => $item,
                'created_by' => 1,
            ]);
        }

        $AluminumTypes = [
            'Roto',
            'Xingfa',
            'RUM'
        ];

        foreach ($AluminumTypes as $item) {
            \App\Models\AluminumType::query()->updateOrCreate([
                'name' => $item,
            ], [
                'name' => $item,
                'created_by' => 1,
            ]);
        }

    }
}
