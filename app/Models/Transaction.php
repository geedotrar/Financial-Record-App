<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'transactions';
    
    protected $fillable= [
        'user_id',
        'account_id',
        'category_id',
        'amount',
        'transaction_date',
        'description'
    ];
}
