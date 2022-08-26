<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model {
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'subject',
        'description',
        'disaster_case_id',
        'priority',
        'task_type_id',
        'task_of',
        'status',
        'signature',
    ];

    public function team() {
        return $this->belongsTo(Team::class);
    }

    public function task_type() {
        return $this->belongsTo(TaskType::class);

    }

    public function case() {
        return $this->belongsTo(DisasterCase::class);
    }

    public function get_priority() {
        return match ($this->priority) {
            0 => 'Urgent',
            1 => 'High',
            2 => 'Medium',
            default => 'Low',
        };
    }
}
