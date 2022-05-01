<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

     protected $fillable = [

        'entry_date',
        'entry_time',
        'exit_date',
        'position_nr',
        'symbol',
        'type',
        'size',
        's/l',
        't/p',
        'profit',
        'desc',
        
    ];

}
