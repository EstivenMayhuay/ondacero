<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Locutor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Locutor::create([
            'name' => 'Memo García',
            'urlImageName' => 'memo_garcia.png'
        ]);
    }
}
