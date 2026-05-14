<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'name',
        'desc',
        'price',
        'quantity',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function getImageUrlAttribute()
    {
        if (! $this->img) {
            return null;
        }

        if (filter_var($this->img, FILTER_VALIDATE_URL)) {
            return $this->img;
        }

        return Storage::disk('public')->url($this->img);
    }
}
