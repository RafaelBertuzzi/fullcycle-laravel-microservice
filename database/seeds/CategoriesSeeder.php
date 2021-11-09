<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        factory(Category::class, 100)->create();
    }
}
