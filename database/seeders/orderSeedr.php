<?php

namespace Database\Seeders;

use App\Models\order;
use Illuminate\Database\Seeder;

class orderSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        order::factory(50)->create();
    }
}
