<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Food;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prime extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'food_id',
        'price_usd',
        'price_nok',
    ];

    public function food() {
        return $this->belongsTo(Food::class);
    }
}
