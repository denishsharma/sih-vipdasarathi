<?php

namespace Database\Factories;

use App\Models\TaskType;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskTypeFactory extends Factory {
    protected $model = TaskType::class;

    public function definition(): array {
        return [
            'name' => $this->faker->word,
        ];
    }
}
