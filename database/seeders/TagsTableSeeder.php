<?php

namespace Database\Seeders;

use App\Models\Tags;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            'tag_name' => '家事'
        ];
        Tags::create($params);
        $params = [
            'tag_name' => '勉強'
        ];
        Tags::create($params);
        $params = [
            'tag_name' => '運動'
        ];
        Tags::create($params);
        $params = [
            'tag_name' => '移動'
        ];
        Tags::create($params);
        $params = [
            'tag_name' => '遊び'
        ];
        Tags::create($params);
    }
}
