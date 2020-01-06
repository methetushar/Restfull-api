<?php

use Illuminate\Database\Seeder;
use App\Model\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Product::class,50)->create();
    }
}
