<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class GeoLocationService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getLocation($ip)
    {
        // Untuk pengujian, gunakan IP publik jika IP adalah localhost
        if ($ip == '127.0.0.1' || $ip == '::1') {
            $ip = $this->getPublicIp();
        }

        try {
            $response = $this->client->get("http://ipinfo.io/{$ip}/json");
            $data = json_decode($response->getBody(), true);

            // Log untuk debugging

            return $data;
        } catch (RequestException $e) {
            // Log error
            return [
                'city' => null,
                'region' => null,
                'country' => null,
            ];
        }
    }

    // Fungsi untuk mendapatkan IP publik
    private function getPublicIp()
    {
        try {
            $response = $this->client->get('https://api.ipify.org?format=json');
            $data = json_decode($response->getBody(), true);

            return $data['ip'] ?? '127.0.0.1';
        } catch (RequestException $e) {
            return '127.0.0.1';
        }
    }
}