<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Debt extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'debts';
    
    protected $fillable= [
        'user_id',
        'creditor',
        'amount',
        'due_date',
        'description'
    ];
}
