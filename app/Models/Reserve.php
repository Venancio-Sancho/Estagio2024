<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'table_id',
        'time',
        'date',
        'value',
        
        
        
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function table(){
        return $this->belongsTo(Table::class, 'table_id');
    }

  
    }




