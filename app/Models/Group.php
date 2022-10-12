<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function teacher() {
        return $this->belongsTo(Group::class,'teacher_id','id');
    }

    public function students() {
        return $this->belongsToMany(User::class,'group_students','group_id','student_id');
    }

    public function program() {
        return $this->belongsTo(Program::class);
    }

    public function lectures() {
        return $this->hasMany(Lecture::class);
    }
}
