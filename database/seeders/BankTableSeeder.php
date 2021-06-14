<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::insert([
            [
                'name_bank' => 'BANK MANDIRI',
                'admin'     => 4000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bank' => 'BANK BRI',
                'admin'     => 3000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bank' => 'BANK BNI',
                'admin'     => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bank' => 'BANK BRI SYARIAH',
                'admin'     => 4000,
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'name_bank' => 'BANK BSI',
                'admin'     => 4000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bank' => 'BANK MEGA',
                'admin'     => 4000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
