<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ranch;

class ParentCow extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ranch_id',
    ];

    public function ranch()
    {
        return $this->belongsTo(Ranch::class);
    }
}
