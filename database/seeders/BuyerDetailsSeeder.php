<?php

namespace Database\Seeders;

use App\Models\Users\BuyerDetail;
use Illuminate\Database\Seeder;

class BuyerDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BuyerDetail::factory(1)->create();
    }
}
