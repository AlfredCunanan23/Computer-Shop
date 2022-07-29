<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\Order;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Customer::create([
            "first_name"=> "Aaron",
            "last_name"=> "Monares",
            "address"=> "San isidro",
            "contact_number" => "09091234567",
            "email"=> "test@test.com",
        ]);
        Order::create([
            "customer_id" => 1,
            "total" => 123,
         ]);
         Order::create([
            "customer_id" => 2,
            "total" => 300,
         ]);

    }
}
