<?php

use Illuminate\Database\Seeder;

class produtoTableSeeser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\site_produto::class,20)->create();
    }
}
