<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function categoryName() {
        return $this->belongsTo(Category::class, 'category');
    }

    public function orders() {
        return $this->hasMany(OrderItem::class);
    }
}
