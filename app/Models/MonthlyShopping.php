<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MonthlyShopping extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'monthly_shopping';
    
    protected $fillable= [
        'user_id',
        'item_name',
        'amount',
        'shopping_date',
        'description'
    ];
}
