<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Entities\Customer\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();
        factory(App\Entities\Customer\Customer::class, 100)->create();
    }
}
