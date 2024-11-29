<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'table_id',
        'time',
        
        
        
    ];
    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function table(){
        return $this->belongsTo(Table::class, 'table_id');
    }

  
    }




