<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_news_index()
    {
        $response = $this->get('/');

        $response->assertStatus(Response::HTTP_OK);
    }

    public function test_news_create()
    {
        $response = $this->post('news.create');

        $response->assertStatus(Response::HTTP_OK);
    }

    public function test_news_store()
    {
        $data = [
            'title' => 'Test name',
            'description' => 'Example description'
        ];

        $response = $this->post(route('news.store'), $data);

        $response->assertJSON($data);
    }
}