<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'id' => 1,
            'user_id' => 1,
            'name' => 'math',
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => NULL,
        ]);
    }
}
