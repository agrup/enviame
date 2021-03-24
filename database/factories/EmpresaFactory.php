<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empresa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'email'=> $this->faker->unique()->safeEmail,
            'address'=> $this->faker->streetAddress(),
            'phone'=> $this->faker->phoneNumber(),
            'url'=> $this->faker->url(),
            'cuil'=> $this->faker->randomNumber(5, true),
        ];
    }
}
