<?php

use Illuminate\Database\Seeder;

class FormulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [['name' => 'start', 'price' => 100], ['name' => 'standard', 'price' => 200], ['name' => 'premium', 'price' => 150], ['name' => 'personnalisé', 'price' => 0]];
        foreach($names as $key => $value) {
            factory(App\Formules::class, 1)->create(['name' => $value['name'], 'price' => $value['price']]);
        }
    }
}
