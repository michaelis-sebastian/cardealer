<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone'];

    public function sold()
    {
        return $this->hasMany(Sold::class);
        // return $this->belongsTo(Sold::class);
    }
}
