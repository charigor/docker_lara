<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoleUser>
 */
class RoleUserFactory extends Factory
{
    public static $countUser = 0;
    protected $model = \App\Models\RoleUser::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return
            [
                'user_id' =>  $this->countProp(),
                'role_id' => $this->faker->numberBetween(1,3),
            ];

    }
    public function countProp(){
        if(self::$countUser == 1){
            self::$countUser = 9;
            return self::$countUser;
        }else{
            return ++self::$countUser;
        }
    }
}
