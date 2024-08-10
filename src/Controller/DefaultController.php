<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route("/", name: "home")]
    public function index(): Response
    {
        return $this->render('default/index.html.twig');
    }

    #[Route("/api/helloworld/{name}", name: "api_helloworld")]
    public function apiHelloWorld(string $name): Response
    {
        return new JsonResponse("Hello World! " . $name);
    }
}