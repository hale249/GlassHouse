<?php

use Illuminate\Database\Seeder;
use \App\Models\ProjectCategory;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = ProjectCategory::query()
            ->updateOrCreate([
                'name' => 'Khách sạn',
            ]);

        $category2 = ProjectCategory::query()
            ->updateOrCreate([
                'name' => 'Nhà phố',
            ]);

        $category3 = ProjectCategory::query()
            ->updateOrCreate([
                'name' => 'Biệt thự',
            ]);


    }
}
