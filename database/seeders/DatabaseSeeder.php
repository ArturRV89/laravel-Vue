<?php

namespace Database\Seeders;

use \App\Models\User;
use App\Models\Desk;
use App\Models\DeskList;
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
        User::factory(10)->create();
        Desk::factory(10)->create();
        DeskList::factory(20)->create();
    }
}
