<?php

namespace App\Entity;

use App\Repository\MatiereRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatiereRepository::class)]
class Matiere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomDeMatiere = null;

    #[ORM\Column(length: 255)]
    private ?string $nomProf = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDeMatiere(): ?string
    {
        return $this->nomDeMatiere;
    }

    public function setNomDeMatiere(string $nomDeMatiere): static
    {
        $this->nomDeMatiere = $nomDeMatiere;

        return $this;
    }

    public function getNomProf(): ?string
    {
        return $this->nomProf;
    }

    public function setNomProf(string $nomProf): static
    {
        $this->nomProf = $nomProf;

        return $this;
    }
}
