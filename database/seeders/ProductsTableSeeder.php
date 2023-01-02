<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            $newProduct = new Product();
            $newProduct->title = $faker->word();
            $newProduct->price = $faker->randomFloat(2,0,99999);
            $newProduct->description = $faker->text(100);
            if($faker->boolean()){
                $newProduct->status = 'nuovo';
            }else{
                if($faker->boolean()){
                    $newProduct->status = 'usato buone condizioni';
                }else{
                    $newProduct->status = 'usato come nuovo';
                }
            }
            $newProduct->available = $faker->boolean();
            $newProduct->save();
        }
    }
}
