<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameToOrg extends Model
{
    use HasFactory;
    protected $table = "game_to_orgs";
    protected $fillable = ["game_id", "organization_id"];

    function organization() {
        return $this->belongsTo(Organization::class);
    }
}
