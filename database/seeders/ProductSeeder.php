<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCf6pGmV0PDJX_iID5ieYFzpcIQcMEmWIFb3VtoDfs1nrPNVrrLPjL03rw2n0xdWxXjDs4IVjPrtZ_koAa1xlASzUPjmqvH2jr_pFdBPGQbGh--8BAlG9H6ipnpinSDiGRUzjfG1HAQunSjTBqY4u7-UM-iO4F-Fb_NbWOAAIu5hNYC2IWyLi3xRfx_KvmyvB8oaXGhztuT7M_MBEwD6fSaSyK1_UEHRlQ4ycGw7TOLESXFvSpMX9S2ljzkKK3JnD94mkNL34ULtnY',
                'name' => 'Dâu tây Hoàng gia',
                'desc' => 'Dâu tây hữu cơ tươi ngon',
                'price' => 220000,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAtsPjNRwFzqhUh-xZDjz_VxJdvMCaM-giVgpmsEUdYFLASy2BaBaaPpB8wId0fgMRu4Aajrv-OmrdNB4gj23aCsPy2q0U7aNDZxdx_8lqIdNiWj4ZzDyWqoV1DS5SYsRl8eIXyNgIzht7f-22ihiDGHRNJPBo2snxg9RGbV0z4aFqYURxuMdcWd4xhCzbgearqlzd9m1sHZroy1QJ8BBjN0IbS7YbcdEU2HL9f3wVlWB3I_h3HkIQAm0n-S8CQv3mNVx0SCBjeU_o',
                'name' => 'Xoài Mật ong',
                'desc' => 'Xoài ngọt từ mật ong',
                'price' => 204000,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCqRAsc93UjqTfPVKv5XtujUMCc2ParC03tq-Vu8lUvgVxCNsEcqJn0ApZocWyKYWwO1ucMxO3C_orMtoqiUBlu3aS2MqqbCGjumymthPjFvNZF-qw5cgKNOha6c6-JGByBXOsqaBCt5U65upZ3g5l76w9-ACeo2bDC29gGgLYs7mHfapLzZx0KOOD6t3ImcsKQBoHf79mcOl66xSYQoHOXw4a5fixO6VW5p1hgcujsGbAnssXeIbsxawWVDsWng0CzCskPBbdzCD8',
                'name' => 'Dứa Hoàng gia',
                'desc' => 'Dứa cao cấp',
                'price' => 382500,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB2DBLp3WWdnQ0u39EXGy70SXt9PEOJ1B4XBUuUhBqq7Mzn87BthZUFI72GQ22HX_hivWyjlAYPu03kDT8dGkN22j_s32TKkcCbXJGZrT3KIkeqJGazcQp4nopu0o5aKQy9dsMwPOCa6e5WPut8oRf1y3-nl8ptwy-RvKerv5Eg38N1hb-7pIVRfU-N6dIhi4Z6B3yWsHi-_wV-8S833ATbrbTmCUzVmsshmZFgbj1k8DQCLo0HtizbayMUsqxkn3cika3KP5ng_eM',
                'name' => 'Nho đen Midnight',
                'desc' => 'Nho đen hữu cơ ngọt ngào, hương vị đậm đà',
                'price' => 229500,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
