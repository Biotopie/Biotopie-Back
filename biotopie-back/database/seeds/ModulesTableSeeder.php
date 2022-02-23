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
        $names = ['easy recycling', 'no waste day', 'green mobility', 'labeled office supplies', 'green it', 'eco kitchen'];
        foreach($names as $name) {
            factory(App\Modules::class, 1)->create(['name' => $name]);
        }
    }
}
