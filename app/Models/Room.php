<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $primaryKey = 'room_id';

    public function events()
    {
        return $this->hasMany(Event::class, 'room_id', 'room_id');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'events', 'room_id', 'teacher_id')
                    ->withPivot('time')
                    ->withTimestamps();
    }
}
