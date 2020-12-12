<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = "organizations";
    protected $fillable = ["name", "foundation_year", "parent_org"];
    use HasFactory;

    public function parent_org() {
        return $this->belongsTo(Organization::class, 'parent_org');
    }
}
