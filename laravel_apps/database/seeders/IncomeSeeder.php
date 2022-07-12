<?php

namespace Database\Seeders;

use App\Model\Income;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 100 ; $i++) {
            $data[] = [
                "category" => Str::random(10),
                "total" => 1000000,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ];
        }

        Income::insert($data);
    }
}
