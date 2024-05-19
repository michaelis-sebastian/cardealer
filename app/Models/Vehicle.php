<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_id',
        'year',
        'color',
        'image_link',
        'price'
    ];
    public function model()
    {
        return $this->belongsTo(Models::class);
    }

    public function sold()
    {
        return $this->hasOne(Sold::class);
    }
}
