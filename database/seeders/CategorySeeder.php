<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_categories = File::get('database/categories.json');
        $data = json_decode($json_categories);
        foreach ($data as $category) {
            Category::create(array(
                'category_name' => $category->nombre
            ));
        }
    }
}
