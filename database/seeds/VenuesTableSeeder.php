<?php

use Illuminate\Database\Seeder;
use Base\Component\Venue\Model\Venue;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Venue::class, 50)->create();
    }
}
