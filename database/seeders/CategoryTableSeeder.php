<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker =Faker::create();//sinh ra dữ liệu đang gọi
        for($i=0;$i<50;$i++){
            Category::create([
                'ma_tloai'=>$i+1,
                'ten_tloai'=>$faker->sentence(2,true)
            ]);
        }
    }
}
