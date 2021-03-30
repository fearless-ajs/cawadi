<?php

namespace Database\Seeders;

use App\Models\Transactions\WishList;
use Illuminate\Database\Seeder;

class WishListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WishList::factory(500)->create();
    }
}
