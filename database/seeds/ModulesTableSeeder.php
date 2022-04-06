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
        $names = [['name' => 'Vivez bio', 'price' => 8], ['name' => 'Repas malin', 'price' => 17], ['name' => 'Energie consciente', 'price' => 76], ['name' => 'Bureautique engagée', 'price' => 99], ['name' => 'Recyclage multimédia', 'price' => 699], ['name' => 'Eco cartouche', 'price' => 10], ['name' => 'Vrac responsable', 'price' => 30], ['name' => 'Anti-obsolescence', 'price' => 50], ['name' => 'Sobriété numérique', 'price' => 2000], ['name' => 'Tri facile', 'price' => 30]];
        foreach($names as $key => $value) {
            factory(App\Modules::class, 1)->create(['name' => $value['name'], 'price' => $value['price']]);
        }
    }
}
