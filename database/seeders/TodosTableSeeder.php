<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'todo' => 'english report',
            'description' => 'at least 200 words',
            'due' => date('Y-m-d'),
        ];
        Todo::create($param);
        $param = [
            'todo' => 'wash the dishes',
        ];
        Todo::create($param);
        $param = [
            'todo' => 'clean my room',
            'description' => 'My friends will be visited.',
            'due' => date('Y-m-d'),
        ];
        Todo::create($param);
        $param = [
            'todo' => 'buy some snacks',
        ];
        Todo::create($param);
    }
}