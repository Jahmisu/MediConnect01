<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drugstore extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'storename',
        'storeaddress',
        'licenseno',
        'operatingdayshrs',
    ];

    // Relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}



