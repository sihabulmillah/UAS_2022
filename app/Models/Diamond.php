<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diamond extends Model
{
    use HasFactory;
    protected $table = "diamond";

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
