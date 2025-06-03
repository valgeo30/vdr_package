<?php

namespace Vdrpackage\Parametres\Entity;

use App\Repository\ParametresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParametresRepository::class)]
class Parametres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 32, nullable: true)]
    private $Appli;

    #[ORM\Column(type: 'string', length: 32)]
    private $Nom;

    #[ORM\Column(type: 'integer')]
    private $Ordre;

    #[ORM\Column(type: 'string', length: 4096, nullable: true)]
    private $Valeur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAppli(): ?string
    {
        return $this->Appli;
    }

    public function setAppli(?string $Appli): self
    {
        $this->Appli = $Appli;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getOrdre(): ?int
    {
        return $this->Ordre;
    }

    public function setOrdre(int $Ordre): self
    {
        $this->Ordre = $Ordre;

        return $this;
    }

    public function getValeur(): ?string
    {
        return $this->Valeur;
    }

    public function setValeur(?string $Valeur): self
    {
        $this->Valeur = $Valeur;

        return $this;
    }
}
