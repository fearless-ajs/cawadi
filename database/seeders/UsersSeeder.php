<?php

namespace Database\Seeders;

use App\Models\Users\BuyerDetail;
use App\Models\Users\PublisherDetail;
use App\Models\Users\ReaderDetail;
use App\Models\Users\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1000)->create();

    }
}
