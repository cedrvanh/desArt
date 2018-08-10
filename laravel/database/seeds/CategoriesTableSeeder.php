<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class)->create([
            'title' => 'Kunst'
        ]);

        factory(Category::class)->create([
            'title' => 'Sculpturen'
        ]);

        factory(Category::class)->create([
            'title' => 'Fotografie'
        ]);

        factory(Category::class)->create([
            'title' => 'Digitale Kunst'
        ]);
    }
}
