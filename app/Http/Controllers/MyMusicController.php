<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyMusic;
class MyMusicController extends Controller
{
    public function index(){
        $musics = MyMusic::get();

       return inertia('Mymusic',[
        'musics' => $musics
       ]);
    }
}
