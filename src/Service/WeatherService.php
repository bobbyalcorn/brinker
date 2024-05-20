<?php

// src/Service/WeatherService.php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherService
{
    private $httpClient;
    private $apiKey;

    public function __construct(HttpClientInterface $httpClient, string $apiKey)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $apiKey;
    }

    public function getCurrentWeather(string $city): array
    {
        $apiUrl = sprintf('http://api.weatherapi.com/v1/current.json?key=%s&q=%s', $this->apiKey, $city);
        $response = $this->httpClient->request('GET', $apiUrl);

        if ($response->getStatusCode() !== 200) {
            throw new \Exception('Error fetching weather data');
        }

        return $response->toArray();
    }
}
