<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $category = new category();
        $category->name = "Sản phẩm chính";
        $category->save();

        $category = new category();
        $category->name = "Sản phẩm bổ trợ";
        $category->save();

        $category = new category();
        $category->name = "Sản phẩm khác";
        $category->save();
    }
}
