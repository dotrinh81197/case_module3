<?php

namespace Database\Seeders;

use App\Models\periodic;
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
        $periodic = new Periodic();
        $periodic->name = "Hằng năm";
        $periodic->save();

        $periodic = new Periodic();
        $periodic->name = "Nửa năm";
        $periodic->save();

        $periodic = new Periodic();
        $periodic->name = "hằng quý";
        $periodic->save();
    }
}
