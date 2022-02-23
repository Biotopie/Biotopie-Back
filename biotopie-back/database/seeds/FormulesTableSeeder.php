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
        $names = ['start', 'standard', 'premium', 'personnalisé'];
        foreach($names as $name) {
            factory(App\Formules::class, 1)->create(['name' => $name]);
        }
    }
}
