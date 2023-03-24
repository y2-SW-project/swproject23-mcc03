<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ForumPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    
    {
        return [
            'title' => 'Bouldering '.$this->faker->randomElement(['Finals', 'Cup', 'Gym', 'Competition', 'Training', 'Accident', 'For Noobs', 'Tips!', "... Is It Safe?"]),
            
            'user_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),

            'category_id' => $this->faker->randomElement([1,2,3,4]),
    
            'body_text' => $this->faker->paragraph($nbSentences = 20, $variableNbSentences = true)
        ];
    }
}
