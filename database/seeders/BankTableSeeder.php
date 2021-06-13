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
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bank' => 'BANK BRI',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bank' => 'BANK BNI',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bank' => 'BANK BRI SYARIAH',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'name_bank' => 'BANK BSI',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bank' => 'BANK MEGA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
