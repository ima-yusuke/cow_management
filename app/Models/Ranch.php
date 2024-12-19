<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ParentCow;
use App\Models\CattleBarn;

class Ranch extends Model
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
    // ParentCowモデルとのリレーション
    public function parentCows()
    {
        return $this->hasMany(ParentCow::class);
    }

    public function cattleBarns()
    {
        return $this->hasMany(CattleBarn::class);
    }
    // CattleBarnモデルとのリレーション
}
