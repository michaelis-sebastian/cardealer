<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sold extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'customer_id',
        'dealer_id',
        'sold_date',
         'sold_price'
        ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }

}
