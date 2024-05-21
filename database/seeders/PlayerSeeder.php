<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Players;
use Illuminate\Support\Facades\DB;


class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $player = [
            [
                'name'=>'ALDRIN',
                'jerseynumber' => 3,
                'position' => 'pointguard',
            ],
            [
                'name'=>'MARVEN',
                'jerseynumber' => 4,
                'position' => 'smallforward',
            ],
            [
                'name'=>'MILJOHN',
                'jerseynumber' => 5,
                'position' => 'center',
            ],
            [
                'name'=>'SASAN',
                'jerseynumber' => 6,
                'position' => 'shooting guard',
            ],
            [
                'name'=>'BOTING',
                'jerseynumber' => 8,
                'position' => 'bangko',
            ],
        ];
        foreach ($player as $player) {
            DB::table('players')->insert($player);
        }

    }

}
