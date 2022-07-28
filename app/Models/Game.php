<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = "game";

    public function diamond()
    {
        return $this->hasOne(Diamond::class);
    }
}
