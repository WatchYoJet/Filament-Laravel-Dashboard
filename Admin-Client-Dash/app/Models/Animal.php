<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'AnimalName',
        'Age',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
