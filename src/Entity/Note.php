<?php

namespace App\Entity;

use App\Repository\NoteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NoteRepository::class)]
class Note
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'notes')]
    #[ORM\JoinColumn(nullable: false)] // ✅ Empêcher que ce champ soit null
    private ?User $apprenti = null;

    #[ORM\ManyToOne(inversedBy: 'notes')]
    #[ORM\JoinColumn(nullable: false)] // ✅ Empêcher que ce champ soit null
    private ?Atelier $atelier = null;

    #[ORM\Column(type: "float")]
    private float $note;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private \DateTimeInterface $date;

    public function __construct()
    {
        $this->date = new \DateTime(); // ✅ Définir une date par défaut
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApprenti(): ?User
    {
        return $this->apprenti;
    }

    public function setApprenti(User $apprenti): self
    {
        $this->apprenti = $apprenti;
        return $this;
    }

    public function getAtelier(): ?Atelier
    {
        return $this->atelier;
    }

    public function setAtelier(Atelier $atelier): self
    {
        $this->atelier = $atelier;
        return $this;
    }

    public function getNote(): float
    {
        return $this->note;
    }

    public function setNote(float $note): self
    {
        if ($note < 0 || $note > 5) {
            throw new \InvalidArgumentException("La note doit être comprise entre 0 et 5.");
        }
        $this->note = $note;
        return $this;
    }

    public function getDate(): \DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }
}
