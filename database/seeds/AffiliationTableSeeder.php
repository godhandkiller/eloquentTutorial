<?php

use App\Affiliation;
use Illuminate\Database\Seeder;

class AffiliationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Affiliation::insert([
            [
                'name' => 'Liberal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Conservative',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
