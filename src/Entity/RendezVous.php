<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RendezVousRepository::class)
 */
class RendezVous
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Heure;

    /**
     * @ORM\ManyToOne(targetEntity=Medecin::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Medecin;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Patient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Etat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->Heure;
    }

    public function setHeure(\DateTimeInterface $Heure): self
    {
        $this->Heure = $Heure;

        return $this;
    }

    public function getMedecin(): ?Medecin
    {
        return $this->Medecin;
    }

    public function setMedecin(?Medecin $Medecin): self
    {
        $this->Medecin = $Medecin;

        return $this;
    }

    public function getPatient(): ?User
    {
        return $this->Patient;
    }

    public function setPatient(?User $Patient): self
    {
        $this->Patient = $Patient;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->Etat;
    }

    public function setEtat(string $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }
}
