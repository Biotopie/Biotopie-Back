<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [['name' => 'easy recycling', 'price' => 50], ['name' => 'no waste day', 'price' => 500], ['name' => 'green mobility', 'price' => 100], ['name' => 'labeled office supplies', 'price' => 150], ['name' => 'green it', 'price' => 200], ['name' => 'eco kitchen', 'price' => 250]];
        foreach($names as $key => $value) {
            factory(App\Modules::class, 1)->create(['name' => $value['name'], 'price' => $value['price']]);
        }
    }
}
