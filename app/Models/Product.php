<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'start_price',
        'description',
        'image_url',
        'status',
        'sold_to',
    ];

    public function buyer() {
        return $this->belongsTo(User::class, 'sold_to');
    }

    public function bids() {
        return $this->hasMany(Bid::class);
    }
}
