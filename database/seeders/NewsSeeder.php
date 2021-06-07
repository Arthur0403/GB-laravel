<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news')->insert($this->getData());
    }

    public function getData(): array
    {
        $faker = Factory::create();
        $data = [];
        for($i =0; $i < 10; $i++)
        {
            $data[] = [
                'id_category' => 1,
                'id_resource' => 1,
                'news_title' => $faker->sentence(mt_rand(3, 10)),
                'news_description' => $faker->text(150),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        return  $data;
    }
}
