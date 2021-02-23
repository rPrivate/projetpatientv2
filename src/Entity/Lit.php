<?php

namespace App\Entity;

use App\Repository\LitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LitRepository::class)
 */
class Lit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumLit;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumLit(): ?int
    {
        return $this->NumLit;
    }

    public function setNumLit(int $NumLit): self
    {
        $this->NumLit = $NumLit;

        return $this;
    }


}
