<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisasterCase extends Model {
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'address_line',
        'zipcode',
        'city',
        'district',
        'state_id',
        'disaster_type_id',
        'case_meta_data_id',
        'status',
        'priority',
        'happened_at',
        'signature',
    ];

    public function state() {
        return $this->belongsTo(State::class);
    }

    public function disaster_type() {
        return $this->belongsTo(DisasterType::class);
    }

    public function tasks() {
        return $this->hasMany(Task::class);

    }
}
