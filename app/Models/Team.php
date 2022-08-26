<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model {
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'team_type',
        'signature',
    ];

    public function cases() {
        return $this->belongsToMany(DisasterCase::class);
    }

    public function tasks() {
        return $this->hasMany(Task::class);

    }
}
