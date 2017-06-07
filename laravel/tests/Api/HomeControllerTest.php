<?php

namespace Tests\Api;

use Faker\Factory as Faker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IndexControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function testIndex()
    {
        $response = $this->get('api');

        $response->assertStatus(200);
        $this->assertEquals('Api', $response->getContent());
    }

    public function testDb()
    {
        // test POST db
        $faker = Faker::create();
        $email = $faker->email;
        $name = $faker->name;

        $response1 = $this->post('api/db', ['email' => $email, 'name' => $name]);
        $response1->assertStatus(200);
        $this->assertEquals('Stored db', $response1->getContent());

        // test GET db
        $response2 = $this->get("api/db?email=$email", ['email' => $email]);
        $response2->assertStatus(200);
        $this->assertEquals("The name = $name", $response2->getContent());
    }

    public function testCache()
    {
        // test POST cache
        $key = mt_rand();
        $value = str_random(40);

        $response1 = $this->post('api/cache', ['key' => $key, 'value' => $value]);
        $response1->assertStatus(200);
        $this->assertEquals('Stored cache', $response1->getContent());

        // test GET cache
        $response2 = $this->get("api/cache?key=$key");
        $response2->assertStatus(200);
        $this->assertEquals("The value = $value", $response2->getContent());
    }
}
