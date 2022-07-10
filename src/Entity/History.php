<?php

namespace App\Entity;

use App\Repository\HistoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HistoryRepository::class)]
class History
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: 'histories')]
    private $category;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'histories')]
    private $user;

    #[ORM\Column(type: 'integer')]
    private $Q1;

    #[ORM\Column(type: 'integer')]
    private $Q2;

    #[ORM\Column(type: 'integer')]
    private $Q3;

    #[ORM\Column(type: 'integer')]
    private $Q4;

    #[ORM\Column(type: 'integer')]
    private $Q5;

    #[ORM\Column(type: 'integer')]
    private $Q6;

    #[ORM\Column(type: 'integer')]
    private $Q7;

    #[ORM\Column(type: 'integer')]
    private $Q8;

    #[ORM\Column(type: 'integer')]
    private $Q9;

    #[ORM\Column(type: 'integer')]
    private $Q10;

    #[ORM\Column(type: 'integer')]
    private $score;

    public function getId(): ?int
    {
        return $this->id;
    }
   

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getQ1(): ?int
    {
        return $this->Q1;
    }

    public function setQ1(int $Q1): self
    {
        $this->Q1 = $Q1;

        return $this;
    }

    public function getQ2(): ?int
    {
        return $this->Q2;
    }

    public function setQ2(int $Q2): self
    {
        $this->Q2 = $Q2;

        return $this;
    }

    public function getQ3(): ?int
    {
        return $this->Q3;
    }

    public function setQ3(int $Q3): self
    {
        $this->Q3 = $Q3;

        return $this;
    }

    public function getQ4(): ?int
    {
        return $this->Q4;
    }

    public function setQ4(int $Q4): self
    {
        $this->Q4 = $Q4;

        return $this;
    }

    public function getQ5(): ?int
    {
        return $this->Q5;
    }

    public function setQ5(int $Q5): self
    {
        $this->Q5 = $Q5;

        return $this;
    }

    public function getQ6(): ?int
    {
        return $this->Q6;
    }

    public function setQ6(int $Q6): self
    {
        $this->Q6 = $Q6;

        return $this;
    }

    public function getQ7(): ?int
    {
        return $this->Q7;
    }

    public function setQ7(int $Q7): self
    {
        $this->Q7 = $Q7;

        return $this;
    }

    public function getQ8(): ?int
    {
        return $this->Q8;
    }

    public function setQ8(int $Q8): self
    {
        $this->Q8 = $Q8;

        return $this;
    }

    public function getQ9(): ?int
    {
        return $this->Q9;
    }

    public function setQ9(int $Q9): self
    {
        $this->Q9 = $Q9;

        return $this;
    }

    public function getQ10(): ?int
    {
        return $this->Q10;
    }

    public function setQ10(int $Q10): self
    {
        $this->Q10 = $Q10;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }
}
