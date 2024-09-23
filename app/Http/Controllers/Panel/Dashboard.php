<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use App\Services\GeoLocationService; // Import service

class Dashboard extends Controller
{
    protected $agent;
    protected $geoLocationService;

    // Tambahkan GeoLocationService ke constructor
    public function __construct(GeoLocationService $geoLocationService)
    {
        $this->agent = new Agent;
        $this->geoLocationService = $geoLocationService;
    }

    public function index(Request $request)
    {
        $ip = $request->ip();

        // Dapatkan informasi lokasi dari GeoLocationService
        $location = $this->geoLocationService->getLocation($ip);

        // Dapatkan informasi OS dan Browser
        $os = $this->agent->platform();
        $browser = $this->agent->browser();

        // Siapkan data untuk dikirim ke view
        $data = [
            'ip' => $ip,
            'city' => $location['city'] ?? 'Unknown',
            'region' => $location['region'] ?? 'Unknown',
            'country' => $location['country'] ?? 'Unknown',
            'os' => $os . ' ' . $this->agent->version($os),
            'browser' => $browser . ' ' . $this->agent->version($browser),
        ];

        // Return ke view dengan data lokasi dan info device
        return view('panel.dashboard', compact('data'));
    }
}