<?php

namespace App\Tests\Api;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EmployeeTest extends WebTestCase
{
    public function testCreateEmployee()
    {
        $response = static::createClient()->request('POST', '/employee', ['json' => [
            'name' => 'Paulo',
            'birthday' => '01121979',
            'country' => 'Portugal',
            'beginDateJob'=> '15092022'
        ]]);

        $this->assertResponseStatusCodeSame(201);
        $this->assertJsonContains([
            '@context' => '/contexts/Employee',
            '@type' => 'Employee',
            'name' => 'Paulo',
            'birthday' => '01121979',
            'country' => 'Portugal',
            'beginDateJob'=> '15092022'
        ]);
    }
}
