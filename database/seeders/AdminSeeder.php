<?php

namespace Database\Seeders;

use App\Models\Admins;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admins::create(
            [
                'u_email' => 'admin@ETS23',
                'u_password' => bcrypt('Pass@ETS23'),
                'mobile_no' =>'7083806410',
                'registration_type' =>'0',
            ]);
            
    }
}