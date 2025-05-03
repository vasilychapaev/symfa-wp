<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class MovieController extends AbstractController
{
    #[Route('/api/movies', name: 'app_movies', methods: ['GET'])]
    public function index(MovieRepository $repository): JsonResponse
    {
        $movies = $repository->findMovies();
        return $this->json($movies);
    }
}
