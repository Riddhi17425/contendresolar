<?php

namespace App\Services;

use GuzzleHttp\Client;

class ShiprocketService
{
    protected $client;
    protected $email;
    protected $password;

    public function __construct()
    {
        $this->client = new Client();
        $this->email = env('');
        $this->password = env('');
    }

    
}

?>