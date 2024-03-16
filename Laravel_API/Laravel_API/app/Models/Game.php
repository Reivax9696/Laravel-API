<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['dice_one', 'dice_two', 'win'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
