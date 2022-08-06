<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class MyMusic extends Model
{
    use HasFactory;

    protected $fillable = [
        'singer_name', '
         age',
        'followers'
    ];
}
