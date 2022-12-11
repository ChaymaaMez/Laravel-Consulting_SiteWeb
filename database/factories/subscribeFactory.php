<?php

namespace Database\Factories;
use App\Models\NewsletterSubscriber;
use Illuminate\Database\Eloquent\Factories\Factory;

class subscribeFactory extends Factory
{
    protected $model = NewsletterSubscriber::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->realText($maxNbChars=50,$inndexSize=2),

        ];
    }
}
