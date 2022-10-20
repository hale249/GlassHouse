<?php

use App\Models\Color;
use App\Models\GlassType;
use App\Models\ProductAccessory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = Color::query()->get();
        $glassTypes = GlassType::query()->get();
        $aluminums = \App\Models\AluminumType::query()->get();
        $accessories = \App\Models\Accessory::query()->get();

        \Illuminate\Support\Facades\DB::transaction(function () use ($colors, $aluminums, $glassTypes, $accessories) {
            $product1 = \App\Models\Product::query()->updateOrCreate([
                'name' => 'CỬA ĐI MỘT CÁNH - FT520',
                'slug' => 'cua-di-mot-canh-ft520',
            ],[
                'category_id' => 1,
                'user_id' => 1,
                'name' => 'CỬA ĐI MỘT CÁNH - FT520',
                'slug' => 'cua-di-mot-canh-ft520',
                'image' => '/customer/images/img-product/CDMC/img-product-CDMC-1.jpg',
                'description_short' => 'INWARD /OUTWARD OPENING DOOR SYSTEM - FT520
Hệ cửa đi mở quay thông dụng của Roto phổ biến được thiết kế để đáp ứng thị trường cửa cho khu vực dân cư và các toà nhà thương mại. Đây là hệ cửa cơ bản có mặt trong hầu hết các thiết kế nhà ở thông dụng, có thể lắp kết hợp hệ thống khoá từ, khoá vân tay hoặc kính điện, kính rèm. Ngoài ra, dòng nhôm Rum của Glasshouse dựa trên tiêu chuẩn của Đức mang lại chất lượng sản phẩm không thua kém những dòng nhôm của Đức.',
                'description' => 'INWARD /OUTWARD OPENING DOOR SYSTEM - FT520
Hệ cửa đi mở quay thông dụng của Roto phổ biến được thiết kế để đáp ứng thị trường cửa cho khu vực dân cư và các toà nhà thương mại. Đây là hệ cửa cơ bản có mặt trong hầu hết các thiết kế nhà ở thông dụng, có thể lắp kết hợp hệ thống khoá từ, khoá vân tay hoặc kính điện, kính rèm. Ngoài ra, dòng nhôm Rum của Glasshouse dựa trên tiêu chuẩn của Đức mang lại chất lượng sản phẩm không thua kém những dòng nhôm của Đức.',
                'price' => 500000,
                'quantity' => 10,
                'is_active' => true
            ]);

            $productImages1 = [
                [
                    'name' => 'CDNC-2.png',
                    'path' => '/customer/images/img-product/CDNC/CDNC-2.png',
                ],
                [
                    'name' => 'CDMC.MatCat.jpg',
                    'path' => '/customer/images/img-product/CDNC/CDMC.MatCat.jpg',
                ],
                [
                    'name' => 'PK-Khoa.png',
                    'path' => '/customer/images/img-product/CDNC/PK-Khoa.png',
                ]
            ];

            foreach ($productImages1 as $item) {
                \App\Models\ProjectImage::query()
                    ->updateOrCreate([
                    'project_id' => $product1->id,
                    'name' => $item['name'],
                    'path' => $item['path'],
                ]);
            }

            foreach ($colors as $color) {
                \App\Models\ProductColor::query()
                    ->updateOrCreate([
                    'product_id' => $product1->id,
                    'color_id' => $color->id
                ]);
            }

            foreach ($glassTypes as $item) {
                \App\Models\ProductGlass::query()
                    ->updateOrCreate([
                        'product_id' => $product1->id,
                        'glass_id' => $item->id
                    ]);
            }

            foreach ($aluminums as $item) {
                \App\Models\ProductAluminum::query()
                    ->updateOrCreate([
                        'product_id' => $product1->id,
                        'aluminum_id' => $item->id
                    ]);
            }

            foreach ($accessories as $item) {
                \App\Models\ProductAccessory::query()
                    ->updateOrCreate([
                        'product_id' => $product1->id,
                        'accessory_id' => $item->id
                    ]);
            }

            /// Product 2
            $product2 = \App\Models\Product::query()->updateOrCreate([
                'name' => 'CỬA ĐI NHIỀU CÁNH - FT520',
                'slug' => 'cua-di-nhie-canh-ft520',
            ],[
                'category_id' => 1,
                'user_id' => 1,
                'name' => 'CỬA ĐI NHIỀU CÁNH - FT520',
                'slug' => 'cua-di-nhie-canh-ft520',
                'image' => '/customer/images/img-product/CDNC/CDNC-3.png',
                'description_short' => 'INWARD /OUTWARD OPENING DOOR SYSTEM - FT520
Phiên bản ngắt nhiệt của FN52W và FN52D nhằm nâng cao hiệu suất cách nhiệt với giá trị U là 2,4W / m2-K. FT520 bao gồm FT520W và FT520D. Nó có thể nhận ra các kiểu mở khác nhau như cửa sổ chỉ quay và nghiêng & lật, cửa mở vào trong, cửa mở ra ngoài, cửa nghiêng & cửa trượt, gấp & trượt, v.v.',
                'description' => 'INWARD /OUTWARD OPENING DOOR SYSTEM - FT520
Phiên bản ngắt nhiệt của FN52W và FN52D nhằm nâng cao hiệu suất cách nhiệt với giá trị U là 2,4W / m2-K. FT520 bao gồm FT520W và FT520D. Nó có thể nhận ra các kiểu mở khác nhau như cửa sổ chỉ quay và nghiêng & lật, cửa mở vào trong, cửa mở ra ngoài, cửa nghiêng & cửa trượt, gấp & trượt, v.v.',
                'price' => 1000000,
                'quantity' => 50,
                'is_active' => true
            ]);

            $productImages2 = [
                [
                    'name' => 'CDNC-2.png',
                    'path' => '/customer/images/img-product/CDNC/CDNC-2.png',
                ],
                [
                    'name' => 'CDMC.MatCat.jpg',
                    'path' => '/customer/images/img-product/CDNC/CDMC.MatCat.jpg',
                ],
                [
                    'name' => 'PK-Khoa.png',
                    'path' => '/customer/images/img-product/CDNC/PK-Khoa.png',
                ]
            ];

            foreach ($productImages2 as $item) {
                \App\Models\ProjectImage::query()
                    ->updateOrCreate([
                        'project_id' => $product2->id,
                        'name' => $item['name'],
                        'path' => $item['path'],
                    ]);
            }

            foreach ($colors as $color) {
                \App\Models\ProductColor::query()
                    ->updateOrCreate([
                        'product_id' => $product2->id,
                        'color_id' => $color->id
                    ]);
            }

            foreach ($glassTypes as $item) {
                \App\Models\ProductGlass::query()
                    ->updateOrCreate([
                        'product_id' => $product2->id,
                        'glass_id' => $item->id
                    ]);
            }

            foreach ($aluminums as $item) {
                \App\Models\ProductAluminum::query()
                    ->updateOrCreate([
                        'product_id' => $product2->id,
                        'aluminum_id' => $item->id
                    ]);
            }

            foreach ($accessories as $item) {
                \App\Models\ProductAccessory::query()
                    ->updateOrCreate([
                        'product_id' => $product2->id,
                        'accessory_id' => $item->id
                    ]);
            }


            // Product 3
            $product3 = \App\Models\Product::query()->updateOrCreate([
                'name' => 'CỬA ĐI MỘT CÁNH VÀ FIX',
                'slug' => 'cua-di-mot-canh-va-fix',
            ],[
                'category_id' => 1,
                'user_id' => 1,
                'name' => 'CỬA ĐI MỘT CÁNH VÀ FIX',
                'slug' => 'cua-di-mot-canh-va-fix',
                'image' => '/customer/images/img-product/CDMC-Fix/img-CDMC-Fix-1.jpg',
                'description_short' => 'INWARD /OUTWARD OPENING DOOR SYSTEM.
Hệ cửa đi mở quay thông dụng của Roto phổ biến được thiết kế để đáp ứng thị trường cửa cho khu vực dân cư và các toà nhà thương mại. Đây là hệ cửa cơ bản có mặt trong hầu hết các thiết kế nhà ở thông dụng, có thể lắp kết hợp hệ thống khoá từ, khoá vân tay hoặc kính điện, kính rèm.Loại nhôm',
                'description' => 'INWARD /OUTWARD OPENING DOOR SYSTEM.
Hệ cửa đi mở quay thông dụng của Roto phổ biến được thiết kế để đáp ứng thị trường cửa cho khu vực dân cư và các toà nhà thương mại. Đây là hệ cửa cơ bản có mặt trong hầu hết các thiết kế nhà ở thông dụng, có thể lắp kết hợp hệ thống khoá từ, khoá vân tay hoặc kính điện, kính rèm.Loại nhôm',
                'price' => 1000000,
                'quantity' => 50,
                'is_active' => true
            ]);

            $productImages3 = [
                [
                    'name' => 'CDNC-2.png',
                    'path' => '/customer/images/img-product/CDNC/CDNC-2.png',
                ],
                [
                    'name' => 'CDMC.MatCat.jpg',
                    'path' => '/customer/images/img-product/CDNC/CDMC.MatCat.jpg',
                ],
                [
                    'name' => 'PK-Khoa.png',
                    'path' => '/customer/images/img-product/CDNC/PK-Khoa.png',
                ]
            ];

            foreach ($productImages3 as $item) {
                \App\Models\ProjectImage::query()
                    ->updateOrCreate([
                        'project_id' => $product3->id,
                        'name' => $item['name'],
                        'path' => $item['path'],
                    ]);
            }

            foreach ($colors as $color) {
                \App\Models\ProductColor::query()
                    ->updateOrCreate([
                        'product_id' => $product3->id,
                        'color_id' => $color->id
                    ]);
            }

            foreach ($glassTypes as $item) {
                \App\Models\ProductGlass::query()
                    ->updateOrCreate([
                        'product_id' => $product3->id,
                        'glass_id' => $item->id
                    ]);
            }

            foreach ($aluminums as $item) {
                \App\Models\ProductAluminum::query()
                    ->updateOrCreate([
                        'product_id' => $product3->id,
                        'aluminum_id' => $item->id
                    ]);
            }

            foreach ($accessories as $item) {
                \App\Models\ProductAccessory::query()
                    ->updateOrCreate([
                        'product_id' => $product3->id,
                        'accessory_id' => $item->id
                    ]);
            }


            // Product 4
            $product1 = \App\Models\Product::query()->updateOrCreate([
                'name' => 'CỬA ĐI MỘT CÁNH - FT520',
                'slug' => 'cua-di-mot-canh-ft520',
            ],[
                'category_id' => 1,
                'user_id' => 1,
                'name' => 'CỬA ĐI MỘT CÁNH - FT520',
                'slug' => 'cua-di-mot-canh-ft520',
                'image' => '/customer/images/img-product/CDMC/img-product-CDMC-1.jpg',
                'description_short' => 'INWARD /OUTWARD OPENING DOOR SYSTEM - FT520
Hệ cửa đi mở quay thông dụng của Roto phổ biến được thiết kế để đáp ứng thị trường cửa cho khu vực dân cư và các toà nhà thương mại. Đây là hệ cửa cơ bản có mặt trong hầu hết các thiết kế nhà ở thông dụng, có thể lắp kết hợp hệ thống khoá từ, khoá vân tay hoặc kính điện, kính rèm. Ngoài ra, dòng nhôm Rum của Glasshouse dựa trên tiêu chuẩn của Đức mang lại chất lượng sản phẩm không thua kém những dòng nhôm của Đức.',
                'description' => 'INWARD /OUTWARD OPENING DOOR SYSTEM - FT520
Hệ cửa đi mở quay thông dụng của Roto phổ biến được thiết kế để đáp ứng thị trường cửa cho khu vực dân cư và các toà nhà thương mại. Đây là hệ cửa cơ bản có mặt trong hầu hết các thiết kế nhà ở thông dụng, có thể lắp kết hợp hệ thống khoá từ, khoá vân tay hoặc kính điện, kính rèm. Ngoài ra, dòng nhôm Rum của Glasshouse dựa trên tiêu chuẩn của Đức mang lại chất lượng sản phẩm không thua kém những dòng nhôm của Đức.',
                'price' => 500000,
                'quantity' => 10,
                'is_active' => true
            ]);

            $productImages1 = [
                [
                    'name' => 'CDNC-2.png',
                    'path' => '/customer/images/img-product/CDNC/CDNC-2.png',
                ],
                [
                    'name' => 'CDMC.MatCat.jpg',
                    'path' => '/customer/images/img-product/CDNC/CDMC.MatCat.jpg',
                ],
                [
                    'name' => 'PK-Khoa.png',
                    'path' => '/customer/images/img-product/CDNC/PK-Khoa.png',
                ]
            ];

            foreach ($productImages1 as $item) {
                \App\Models\ProjectImage::query()
                    ->updateOrCreate([
                        'project_id' => $product1->id,
                        'name' => $item['name'],
                        'path' => $item['path'],
                    ]);
            }

            foreach ($colors as $color) {
                \App\Models\ProductColor::query()
                    ->updateOrCreate([
                        'product_id' => $product1->id,
                        'color_id' => $color->id
                    ]);
            }
        });
    }
}
