<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: App\Repository\MovieRepository::class)]
#[ORM\Table(name: "wp_posts")]
class Movie
{
    #[ORM\Id]
    #[ORM\Column(name: "ID", type: "integer")]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\Column(name: "post_title", type: "string", length: 255)]
    private string $title;

    #[ORM\Column(name: "post_content", type: "text", nullable: true)]
    private ?string $content = null;

    #[ORM\Column(name: "post_type", type: "string", length: 20)]
    private string $postType;
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string {
        return $this->title;
    }

    public function getContent(): ?string {
        return $this->content;
    }

    public function getPostType(): ?string {
        return $this->postType;
    }
}

