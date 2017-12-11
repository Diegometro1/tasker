<?php

use Illuminate\Database\Seeder;

class ChoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Chore::class, 10)->create();
    }
}
