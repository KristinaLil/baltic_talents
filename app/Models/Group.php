<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function teachers () {
        return $this->belongsTo(Group::class,'teacher_id','id');
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function programs() {
        return $this->belongsTo(Program::class);
    }

    public function lectures() {
        return $this->hasMany(Lecture::class);
    }
}
