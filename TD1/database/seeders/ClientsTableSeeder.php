<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert(
            [
                'numeroClient' => 1,
                'nom' => 'John Doe',
                'email' => 'johndoe@gmail.com',
                'carteBancaire' => '4024007142416808'
            ]);
    }
}
