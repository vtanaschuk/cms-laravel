<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Teacher;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'teacher_id' => Teacher::factory(),
            'room_id' => Room::factory(),
            'time' => $this->faker->dateTime(),
        ];
    }
}
