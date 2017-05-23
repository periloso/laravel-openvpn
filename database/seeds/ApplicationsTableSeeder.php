<?php

use Illuminate\Database\Seeder;
use App\Models\Application;

class ApplicationsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::first();
        $application = Application::create([
            'name' => 'bugger',
            'user_id' => $user->id,
        ]);
    }
}
