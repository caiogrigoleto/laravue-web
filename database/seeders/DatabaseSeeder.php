<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Groups;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(
            [
                'first_name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
            ]
        );
        
        Product::factory()->count(5)->create(
            [
                'description' => 'Produto Teste',
                'quantity' => 10,
                'price' => 10,
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => now(),
            ]
        );

        Groups::factory()->count(5)->create([
            'description' => 'Grupo Teste',
            'order' => 1,
            'user_id' => 1,
            'created_at' => now(),
        ]);


        Customer::factory()->count(10)->create(
            [
                'name' => 'Cliente Teste',
                'address' => 'Endereço Teste',
                'state' => 'Estado Teste',
                'city' => 'Cidade Teste',
                'phone' => '999999999',
                'email' => 'test@test.com',
                'active' => true,
                'user_id' => 1,
                'created_at' => now(),
            ]
        );

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
