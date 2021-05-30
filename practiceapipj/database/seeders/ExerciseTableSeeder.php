<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercise;

class ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'test1',
            'email' => 'test1@example.com',
            'profile' => 'samaple',
        ];
        $rest = new Exercise;
        $rest->fill($param)->save();

    }
}
