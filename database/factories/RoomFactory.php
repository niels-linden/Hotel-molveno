<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Room;
use App\Models\Roomtype;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "room_number" => $this->faker->unique()->numberBetween(1, 10),
            "is_clean" => $this->faker->boolean,
            "available" => $this->faker->boolean,
            "maximum_adults" => $this->faker->numberBetween(2, 4),
            "maximum_children" => $this->faker->numberBetween(0, 2),
            "roomtype_id" => $this->faker->numberBetween(1, 2),
        ];
    }
}
