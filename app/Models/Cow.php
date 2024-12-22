<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cow extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tag_num',
        'sex',
        'birthday',
        'category',
        'ranch_id',
        'cattle_barn_id',
        'parent_cows_id',
        'status_id',
    ];

    public function ranch()
    {
        return $this->belongsTo(Ranch::class);
    }

    public function cattle_barn()
    {
        return $this->belongsTo(CattleBarn::class);
    }

    public function parent_cows()
    {
        return $this->belongsTo(ParentCow::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
