<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    use HasFactory;

    protected $table = 'user_skills';

    public function user()
    {
        return $this->hasMany(Skill::class);
    }
}
