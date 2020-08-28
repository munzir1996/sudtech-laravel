<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Tag::class)->create([
            'name' => 'PHP',
        ]);
        factory(\App\Models\Tag::class)->create([
            'name' => 'C#',
        ]);
        factory(\App\Models\Tag::class)->create([
            'name' => 'Javascript',
        ]);
    }
}
