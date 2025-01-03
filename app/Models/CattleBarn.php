<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ranch;

class CattleBarn extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ranch_id',
    ];
    // Cowモデルとのリレーション
//    public function cows()
//    {
//        return $this->hasMany(Cow::class);
//    }
    // ParentCowモデルとのリレーション
    public function ranch()
    {
        return $this->belongsTo(Ranch::class);
    }
}
