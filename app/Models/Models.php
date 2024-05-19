<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    protected $fillable = [
        'brand_id',
        'name'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
