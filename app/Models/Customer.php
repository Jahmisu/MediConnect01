<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'firstname',
        'middlename',
        'lastname',
        'age',
        'birthdate',
        'sex',
        'address',
    ];

    // Relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
