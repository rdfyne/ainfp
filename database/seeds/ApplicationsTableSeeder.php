<?php

use Illuminate\Database\Seeder;
use App\Application;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Application::class, 25)->create();
    }
}
