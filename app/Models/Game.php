<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ["name", "release_year", "project_state_id", "engine_id", "genre_id", "license"];

    function project_state() {
        return $this->belongsTo(ProjectState::class);
    }

    function engine() {
        return $this->belongsTo(GameEngine::class);
    }

    function genre() {
        return $this->belongsTo(GameGenre::class);
    }

    function langs() {
        return $this->hasMany(GameToLang::class, 'game_id');
    }

    function orgs() {
        return $this->hasMany(GameToOrg::class, 'game_id');
    }
}
