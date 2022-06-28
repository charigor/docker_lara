<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public $namesVariants = ['admin','user','manager'];
    public $countName = 0;
    public function definition()
    {
        return [
            'name' => $this->addRoleName(),
        ];
    }
    public function addRoleName(){

        $c = $this->countName;
        $this->countName++;
        return  $this->namesVariants[$c];
    }
}
