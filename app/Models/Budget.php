<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Budget extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'budgets';
    
    protected $fillable= [
        'user_id',
        'user_id',
        'amount',
        'month',
        'year'
    ];
}
