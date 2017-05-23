<?php

use Illuminate\Database\Seeder;
use App\Models\Application;
use App\Models\ApiKey;

class ApiKeysTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $application = Application::first();

        $apiKey = ApiKey::create([
            'application_id' => $application->id,
            'key' => '9df557d6-c9a1-3a5d-b17a-47b2925a272f',
        ]);

//        $apiKey = factory(ApiKey::class)->create([
//            'application_id' => $application->id,
//        ]);
    }
}
