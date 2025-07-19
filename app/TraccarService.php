<?php

namespace App;

use Illuminate\Support\Facades\Http;

class TraccarService
{
    protected string $baseUrl;
    protected string $username;
    protected string $password;

    public function __construct()
    {
        $this->baseUrl = config('services.traccar.url');
        $this->username = config('services.traccar.username');
        $this->password = config('services.traccar.password');
    }

    protected function request($method, $uri, $data = [])
    {
        $url = rtrim($this->baseUrl, '/') . '/' . ltrim($uri, '/');
        $response = Http::withBasicAuth($this->username, $this->password)
            ->$method($url, $data);
        $response->throw();
        return $response->json();
    }

    // Create user di Traccar
    public function createUser(array $data)
    {
        return $this->request('post', 'api/users', $data);
    }

    // Create device di Traccar
    public function createDevice(array $data)
    {
        return $this->request('post', 'api/devices', $data);
    }

    // Get all devices
    public function getDevices()
    {
        return $this->request('get', 'api/devices');
    }

    // Get device positions (optionally by deviceId)
    public function getDevicePositions($deviceId = null)
    {
        $uri = 'api/positions';
        if ($deviceId) {
            $uri .= '?deviceId=' . $deviceId;
        }
        return $this->request('get', $uri);
    }
} 