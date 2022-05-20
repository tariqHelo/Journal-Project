<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\ClientScope;

class Journal extends Model
{
    use HasFactory;

     protected $fillable = [
        'entry_date',
       // 'entry_time',
        'exit_date',
        'position_nr',
        'symbol',
        'type',
        'size',
        'entry_price',
        's_l',
        't_p',
        'exit_price',
        'commission',
        'swap',
        'profit',
       // 'desc',
        'user_id'
    ];
    // protected static function boot()
    // {
        
    // }
    protected static function boot()
    {   
        parent::boot();

        self::creating(function($model){
          $model->user_id = \Auth::user()->id;
        });

        static::addGlobalScope(new ClientScope);
    }  
}
