<?php

// src/Controller/ApiOverviewController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class ApiOverviewController extends AbstractController
{
    #[Route('/api-overview', name: 'api_overview')]
    public function index(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $apiToken = $user ? $user->getApiToken() : null;

        return $this->render('api_overview/index.html.twig', [
            'apiToken' => $apiToken,
        ]);
    }
}
