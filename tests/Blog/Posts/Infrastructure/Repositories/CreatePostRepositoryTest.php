<?php
namespace App\Tests\Service;

use GuzzleHttp\Client;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class PostsReposiCreatePostRepositoryTesttoryTest extends KernelTestCase
{
    public function testDetails()
    {
        self::bootKernel();
        $client = new Client();
        $url= 'http://localhost:8000/api/post/';
        try {
            $this->client->request('POST', $url, [
                'id' => 5,
                'userId' => 2,
                'title' => 'Test Title',
                'body' => 'Test Body'
            ]);
        }catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
