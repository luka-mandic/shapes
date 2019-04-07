<?php


namespace App\Tests\Feature\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ShapeControllerTest extends WebTestCase
{
    public function testTriangle()
    {
        $client = static::createClient();

        $client->request('GET', '/triangle/4/5/6');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('{"type":"triangle","a":"4","b":"5","c":"6","circumference":15,"surface":9.92}',
            $client->getResponse()->getContent());
    }

    public function testCircle()
    {
        $client = static::createClient();

        $client->request('GET', '/circle/5');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('{"type":"circle","radius":"5","circumference":31.42,"surface":78.54}',
            $client->getResponse()->getContent());
    }

    public function testInputValidation()
    {
        $client = static::createClient();
        $client->request('GET', '/triangle/4/test/6');

        $this->assertEquals(422, $client->getResponse()->getStatusCode());

        $client->request('GET', '/circle/0');

        $this->assertEquals(422, $client->getResponse()->getStatusCode());
    }

    public function testTriangleInequalityTheoremValidation()
    {
        $client = static::createClient();
        $client->request('GET', '/triangle/1/2/3');

        $this->assertEquals(422, $client->getResponse()->getStatusCode());
        $this->assertEquals('{"error":"The sum of any 2 sides of a triangle must be greater than the measure of the third side"}',
            $client->getResponse()->getContent());
    }
}