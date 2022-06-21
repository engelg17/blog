<?php
namespace App\Tests\Service;

use GuzzleHttp\Client;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class PostsRepositoryTest extends KernelTestCase
{
    public function testDetails()
    {
        self::bootKernel();
        $client = new Client();
        $url= 'http://localhost:8000/api/post/';
        try {
            $this->client->request('GET', $url);
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
