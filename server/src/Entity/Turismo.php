<?php

namespace App\Entity;

use App\Repository\TurismoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TurismoRepository::class)]
class Turismo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $video = null;

    #[ORM\Column(length: 255)]
    private ?string $ubicacion = null;

    #[ORM\Column(length: 255)]
    private ?string $titular = null;

    #[ORM\Column(length: 255)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 255)]
    private ?string $foto = null;

    #[ORM\ManyToOne(inversedBy: 'Tipo')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Tipo $tipo = null;



    public function __construct()
    {
        $this->tipo = new ArrayCollection();
        $this->tipos = new ArrayCollection();
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

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getUbicacion(): ?string
    {
        return $this->ubicacion;
    }

    public function setUbicacion(string $ubicacion): self
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    public function getTitular(): ?string
    {
        return $this->titular;
    }

    public function setTitular(string $titular): self
    {
        $this->titular = $titular;

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

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getYes(): ?self
    {
        return $this->yes;
    }

    public function setYes(?self $yes): self
    {
        $this->yes = $yes;

        return $this;
    }

    /**
     * @return Collection<int, tipo>
     */
    public function getTipo(): Collection
    {
        return $this->tipo;
    }

    public function addTipo(tipo $tipo): self
    {
        if (!$this->tipo->contains($tipo)) {
            $this->tipo->add($tipo);
            $tipo->setYes($this);
        }

        return $this;
    }

    public function removeTipo(tipo $tipo): self
    {
        if ($this->tipo->removeElement($tipo)) {
            // set the owning side to null (unless already changed)
            if ($tipo->getYes() === $this) {
                $tipo->setYes(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tipo>
     */
    public function getTipos(): Collection
    {
        return $this->tipos;
    }

    public function setTipo(?tipo $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
}
