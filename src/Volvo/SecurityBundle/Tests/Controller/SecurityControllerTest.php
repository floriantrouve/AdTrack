<?php

namespace Volvo\SecurityBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $client->request('POST', '/login_check', array('_username' => 'user', '_password' => 'userpass'));
        $this->assertTrue($this->client->getResponse()->isSuccessful());
    }
}
