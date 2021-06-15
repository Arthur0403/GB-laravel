<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class ResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('resources')->insert($this->getData());
    }

    public function getData(): array
    {
        $faker = Factory::create();
        $data = [];
        for($i =0; $i < 10; $i++)
        {
            $data[] = [
                'resource_name' => $faker->sentence(mt_rand(3, 10)),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        return  $data;
    }
}
