<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'part',
        'name',
        'description',
        'price',
    ];
    
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product');
    }
}
