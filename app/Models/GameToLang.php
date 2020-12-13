<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameToLang extends Model
{
    use HasFactory;
    protected $table = "game_to_langs";
    protected $fillable = ["game_id", "programming_lang_id"];

    function programming_lang() {
        return $this->belongsTo(ProgrammingLang::class);
    }
}
