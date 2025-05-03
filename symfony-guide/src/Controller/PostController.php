<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Post;


final class PostController extends AbstractController
{
    #[Route('/api/posts', name: 'api_posts', methods: ['GET'])]
    public function index(EntityManagerInterface $em): JsonResponse
    {
//        $posts = $em->getRepository(Post::class)->findAll();
        $posts = $em->getRepository(Post::class)->findBy(
            [],
            ['createdAt' => 'ASC'],
            3
        );

        return $this->json($posts);
    }

    #[Route('/api/posts/{id}', name: 'api_post_show', methods: ['GET'])]
    public function show(EntityManagerInterface $em, int $id): JsonResponse
    {
        $post = $em->getRepository(Post::class)->find($id);

        if (!$post) {
            return $this->json(['message' => 'Post not found'], 404);
        }

        return $this->json($post);
    }


}
