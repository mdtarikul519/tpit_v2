<?php

namespace Database\Seeders\Seminar;

use App\Models\Seminars\Seminars;
use Illuminate\Database\Seeder;

class SeminarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seminars::truncate();
        Seminars::create([
               'title' =>'ফ্রি সেমিনারের সময়সূচি',
               'details' =>'আপনার ক্যারিয়ার কোন সেক্টরে গড়ে তুলবেন, সিদ্ধান্ত নিতে পারছেন না? আমাদের ফ্রি সেমিনারে জয়েন করুন',
               'date_time' =>'2023-11-10 20:59:00',
        ]);
    }
}
