<?php
namespace App\Tests\Service;

use GuzzleHttp\Client;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UsersRepositoryTest extends KernelTestCase
{
    public function testDetails()
    {
        self::bootKernel();
        $client = new Client();
        $id = '2';
        $url= 'http://localhost:8000/api/users/'.$id;
        try {
            $this->client->request('GET', $url);
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
