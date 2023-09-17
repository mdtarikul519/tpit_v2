<?php

namespace Database\SeedersUser;

use App\Models\User\UserContactNumber;
use Illuminate\Database\Seeder;

class UserContactNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserContactNumber::truncate();
        UserContactNumber::create([
            'user_id' => 1,
            'Phone_number' => '01721241278',
        ]);

        UserContactNumber::create([
            'user_id' => 2,
            'title' => '01721241299',
        ]);
        
        UserContactNumber::create([
            'user_id' => 3,
            'title' => '01721141299',
        ]);

    }
}
