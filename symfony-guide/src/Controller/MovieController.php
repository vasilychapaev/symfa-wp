<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class MovieController extends AbstractController
{
    #[Route('/api/movies', name: 'app_movies', methods: ['GET'])]
    public function index(): JsonResponse
    {
        $movies = [
            [
                'id' => 1,
                'title' => 'The Matrix',
                'year' => 1999,
                'rating' => 8.7,
            ],
            [
                'id' => 2,
                'title' => 'Inception',
                'year' => 2010,
                'rating' => 8.8,
            ],
        ];

        return $this->json($movies);
        // return $this->render('movie/index.html.twig', [
        //     'controller_name' => 'MovieController',
        // ]);
    }
}
