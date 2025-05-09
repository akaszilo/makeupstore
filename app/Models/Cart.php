<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    /** @use HasFactory<\Database\Factories\CartFactory> */
    use HasFactory;
    use SoftDeletes;
    protected $fillabe = ["quantity, user_id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}