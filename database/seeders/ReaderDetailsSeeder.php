<?php

namespace Database\Seeders;

use App\Models\Users\ReaderDetail;
use Illuminate\Database\Seeder;

class ReaderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReaderDetail::factory(1)->create();
    }
}
