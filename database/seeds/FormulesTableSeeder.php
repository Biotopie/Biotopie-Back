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
        $names = [['name' => 'start', 'price' => 150], ['name' => 'standard', 'price' => 100], ['name' => 'premium', 'price' => 50]];
        foreach($names as $key => $value) {
            factory(App\Formules::class, 1)->create(['name' => $value['name'], 'price' => $value['price']]);
        }
    }
}
