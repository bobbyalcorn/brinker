<?php

// src/Controller/DashboardController.php

namespace App\Controller;

use App\Service\WeatherService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
class DashboardController extends AbstractController
{
    private $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    #[Route('/dashboard', name: 'dashboard')]
    public function index(): Response
    {
        $city = 'Dallas, TX';
        try {
            $weatherData = $this->weatherService->getCurrentWeather($city);
        } catch (\Exception $e) {
            $weatherData = null;
            $this->addFlash('error', 'Unable to fetch weather data.');
        }

        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'weather' => $weatherData,
        ]);
    }
}
