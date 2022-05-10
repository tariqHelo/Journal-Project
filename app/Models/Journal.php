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
        'entry_time',
        'exit_date',
        'position_nr',
        'symbol',
        'type',
        'size',
        'entry_price',
        's/l',
        't/p',
        'exit_price',
        'profit',
        'desc',
        'user_id'
    ];

    protected static function boot()
    {
        parent::boot();
        
        self::creating(function($model){
          $model->user_id = auth()->id;
        });
    }

    protected static function booted()
    {
        static::addGlobalScope(new ClientScope);
    }  

    

}
