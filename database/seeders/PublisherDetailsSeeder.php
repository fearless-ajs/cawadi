<?php

namespace Database\Seeders;

use App\Models\Users\PublisherDetail;
use Illuminate\Database\Seeder;

class PublisherDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PublisherDetail::factory(1)->create();
    }
}
