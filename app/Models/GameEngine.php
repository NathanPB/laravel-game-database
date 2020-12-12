<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameEngine extends Model
{
    protected $table = "game_engines";
    protected $fillable = ["name", "release_year", "license"];

    use HasFactory;

    public function langs() {
        return $this->hasMany(GameEngineLang::class, 'engine_id');
    }
}
