<?php

namespace App\Service;


use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    private $client;

    public function __construct(HttpClientInterface $client,
    )
    {
        $this->client = $client;
    }

    public function getUsersData(): array
    {
        $response = $this->client->request(
            'GET',
            'https://jsonplaceholder.typicode.com/users'
        );

        return $response->toArray();
    }
    public function getUserById(int $id){
        $response = $this->client->request(
            'GET',
            'https://jsonplaceholder.typicode.com/users?id=' .$id
        );
        return $response->toArray();
    }
  
  


 
 
 

}