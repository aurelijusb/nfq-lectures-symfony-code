<?php
// tests/Controller/LuckyControllerTest.php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testShowNumber()
    {
        $client = static::createClient();
        $client->request('GET', '/lucky/number');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    // ...
    public function testFormatting()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/lucky/number');
        $this->assertGreaterThan(0, $crawler->filter('li > b')->html());
    }
    // ...
}
