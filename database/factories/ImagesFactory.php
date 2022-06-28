<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class ImagesFactory extends Factory
{

    protected $model = \App\Models\Images::class;
    public  static $imageIdProp = 0;
    public  $imageTypeProp = ['App\Models\Category','App\Models\Products'];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'url' => $this->faker->imageUrl(100, 60, 'cats', true, 'Faker', true),
            'imageable_id' =>  (int)++self::$imageIdProp,
            'imageable_type' => $this->imageTypeProp[rand(0,1)],
        ];
    }

}
