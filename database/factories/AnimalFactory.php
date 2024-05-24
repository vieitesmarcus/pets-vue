<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake('pt_BR')->name(),
            'age' => fake('pt_BR')->randomDigit(),
            'size' => function () {
                $arrSizes =  ['Porte Pequeno', 'Porte Médio', 'Porte Grande'];
                $rand = rand(0, count($arrSizes) - 1);
                return $arrSizes[$rand];
            },
            'informations' => function () {
                $arrInformations =  ['Calmo e educado', 'Ativa e carinhosa', 'Ativa e amável'];
                $rand = rand(0, count($arrInformations) - 1);
                return $arrInformations[$rand];
            },
            'city' => fake('pt_BR')->city(),
            'cellphone' => fake('pt_BR')->cellphoneNumber(),
            'photo' => function () {
                $arrInformations =  ['Amora.png', 'Cat1.png', 'Dog1.png', 'dogin.png', 'Lua.png', 'Sid.png', 'Sirius.png', 'Yoda.png', 'Zelda.png'];
                $rand = rand(0, count($arrInformations) - 1);
                return $arrInformations[$rand];
            }
        ];
    }
}
