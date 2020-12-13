<?php

namespace Database\Seeders;

use App\Models\ProjectState;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectState::create(['name' => 'Aborted',        'description' => 'The project was aborted']);
        ProjectState::create(['name' => 'In Development', 'description' => 'The project is in development and has not been released yet']);
        ProjectState::create(['name' => 'Open Alpha',     'description' => 'The project is in a public alpha']);
        ProjectState::create(['name' => 'Closed Alpha',   'description' => 'The project is in a closed alpha']);
        ProjectState::create(['name' => 'Open Beta',      'description' => 'The project is in a closed beta']);
        ProjectState::create(['name' => 'Closed Beta',    'description' => 'The project in in an open beta']);
        ProjectState::create(['name' => 'Released',       'description' => 'The project was released and still in development']);
        ProjectState::create(['name' => 'Finished',       'description' => 'The project has already been finished']);
    }
}
