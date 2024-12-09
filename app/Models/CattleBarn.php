<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CattleBarn extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    // Cowモデルとのリレーション
//    public function cows()
//    {
//        return $this->hasMany(Cow::class);
//    }
}
