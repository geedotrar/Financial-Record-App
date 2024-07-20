<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Symfony\Component\Console\Descriptor\Descriptor;

class Saving extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'accounts';
    
    protected $fillable= [
        'user_id',
        'target_amount',
        'current_amount',
        'total_amount',
        'description'
    ];
}
