<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameEngineLang extends Model
{
    protected $table = "game_engine_langs";
    protected $fillable = ["engine_id", "lang_id"];
    use HasFactory;

    public function lang() {
        return $this->belongsTo(ProgrammingLang::class);
    }
}
