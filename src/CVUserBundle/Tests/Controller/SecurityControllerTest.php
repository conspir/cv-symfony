<?php

namespace CVUserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    public function testConnexion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/connexion');
    }

}
