<?php

namespace Database\Factories;

use App\Models\Foo;
use Illuminate\Database\Eloquent\Factories\Factory;

class FooFactory extends Factory
{
    protected $model = Foo::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
