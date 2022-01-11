<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prime;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'icon',
        'type',
    ];

    public function prime() {
        return $this->hasMany(Prime::class);
    }
}
