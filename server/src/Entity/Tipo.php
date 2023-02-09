<?php

namespace App\Entity;

use App\Repository\TipoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TipoRepository::class)]
class Tipo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $descripcion = null;

    #[ORM\OneToMany(mappedBy: 'Tipo', targetEntity: Turismo::class, orphanRemoval: true)]
    private Collection $tipo;

    public function __construct()
    {
        $this->turismos = new ArrayCollection();
        $this->tipo = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getTurismos(): ?Turismo
    {
        return $this->turismos;
    }

    public function setTurismos(?Turismo $turismos): self
    {
        $this->turismos = $turismos;

        return $this;
    }

    public function getTurismo(): ?Turismo
    {
        return $this->turismo;
    }

    public function setTurismo(?Turismo $turismo): self
    {
        $this->turismo = $turismo;

        return $this;
    }

    public function addTurismo(Turismo $turismo): self
    {
        if (!$this->turismos->contains($turismo)) {
            $this->turismos->add($turismo);
            $turismo->setTipo($this);
        }

        return $this;
    }

    public function removeTurismo(Turismo $turismo): self
    {
        if ($this->turismos->removeElement($turismo)) {
            // set the owning side to null (unless already changed)
            if ($turismo->getTipo() === $this) {
                $turismo->setTipo(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Turismo>
     */
    public function getTipo(): Collection
    {
        return $this->tipo;
    }

    public function addTipo(Turismo $tipo): self
    {
        if (!$this->tipo->contains($tipo)) {
            $this->tipo->add($tipo);
            $tipo->setTipo($this);
        }

        return $this;
    }

    public function removeTipo(Turismo $tipo): self
    {
        if ($this->tipo->removeElement($tipo)) {
            // set the owning side to null (unless already changed)
            if ($tipo->getTipo() === $this) {
                $tipo->setTipo(null);
            }
        }

        return $this;
    }
}
