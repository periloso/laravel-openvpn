<?php

use Illuminate\Database\Seeder;
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
        factory()->create('App\Models\ApiKey::class');
    }
}
