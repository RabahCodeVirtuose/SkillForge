<?php

namespace App\Entity;

use App\Repository\AtelierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AtelierRepository::class)]
class Atelier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $instructeur = null;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'ateliers')]
    private Collection $inscrits;

    #[ORM\OneToMany(targetEntity: Note::class, mappedBy: 'atelier')]
    private Collection $notes;

    public function __construct()
    {
        $this->inscrits = new ArrayCollection();
        $this->notes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getInstructeur(): ?User
    {
        return $this->instructeur;
    }

    public function setInstructeur(?User $instructeur): static
    {
        $this->instructeur = $instructeur;
        return $this;
    }

    public function getInscrits(): Collection
    {
        return $this->inscrits;
    }

    public function ajouterInscrit(User $user): void
    {
        if (!$this->inscrits->contains($user)) {
            $this->inscrits->add($user);
        }
    }

    public function retirerInscrit(User $user): void
    {
        $this->inscrits->removeElement($user);
    }

    /**
     * @return Collection<int, Note>
     */
    public function getNotes(): Collection
    {
        return $this->notes;
    }

    public function addNote(Note $note): static
    {
        if (!$this->notes->contains($note)) {
            $this->notes->add($note);
            $note->setAtelier($this);
        }

        return $this;
    }

    public function removeNote(Note $note): static
    {
        if ($this->notes->removeElement($note)) {
            // set the owning side to null (unless already changed)
            if ($note->getAtelier() === $this) {
                $note->setAtelier(null);
            }
        }

        return $this;
    }

    public function getMoyenneNotes(): float
    {
        $totalNotes = 0;
        $nombreNotes = count($this->notes);

        if ($nombreNotes === 0) {
            return 0; // Aucun avis donné, moyenne à 0
        }

        foreach ($this->notes as $note) {
            $totalNotes += $note->getNote();
        }

        return round($totalNotes / $nombreNotes, 1); // Arrondi à 1 chiffre après la virgule
    }
}
