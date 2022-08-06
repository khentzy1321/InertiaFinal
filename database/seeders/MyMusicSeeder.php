<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MyMusic;

class MyMusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $musics = [
            [
                'singer_name' => 'Kehnzki',
                'yr_release' => '2002',
                'songs' => 'the great',
                'age' => '23',
                'followers' => '103m'
            ],
            [
                'singer_name' => 'Kendra',
                'yr_release' => '2012',
                'songs' => 'people',
                'age' => '23',
                'followers' => '101m'
            ],
            [
                'singer_name' => 'BoyKot',
                'yr_release' => '2022',
                'songs' => 'heylow',
                'age' => '23',
                'followers' => '11m'
            ],
            [
                'singer_name' => 'CharliePuth',
                'yr_release' => '2012',
                'songs' => 'the mistake',
                'age' => '23',
                'followers' => '10m'
            ],
            ];
            foreach($musics as $m){
                MyMusic::create($m);
            }
    }
}
