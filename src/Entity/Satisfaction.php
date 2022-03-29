<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Satisfaction
 *
 * @ORM\Table(name="satisfaction", indexes={@ORM\Index(name="FKaqe392aeew13o3vsn3ew58h7c", columns={"parents_jar_id_user"}), @ORM\Index(name="FKkkv8aaax8bsyxifrxvl1uky3h", columns={"jardins_id"})})
 * @ORM\Entity
 */
class Satisfaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question1", type="string", length=255, nullable=true)
     */
    private $question1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question2", type="string", length=255, nullable=true)
     */
    private $question2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question3", type="string", length=255, nullable=true)
     */
    private $question3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question4", type="string", length=255, nullable=true)
     */
    private $question4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question5", type="string", length=255, nullable=true)
     */
    private $question5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=true)
     */
    private $etat;

    /**
     * @var \Parents
     *
     * @ORM\ManyToOne(targetEntity="Parents")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parents_jar_id_user", referencedColumnName="id_user")
     * })
     */
    private $parentsJarIdUser;

    /**
     * @var \Jardin
     *
     * @ORM\ManyToOne(targetEntity="Jardin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jardins_id", referencedColumnName="id")
     * })
     */
    private $jardins;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getQuestion1(): ?string
    {
        return $this->question1;
    }

    public function setQuestion1(?string $question1): self
    {
        $this->question1 = $question1;

        return $this;
    }

    public function getQuestion2(): ?string
    {
        return $this->question2;
    }

    public function setQuestion2(?string $question2): self
    {
        $this->question2 = $question2;

        return $this;
    }

    public function getQuestion3(): ?string
    {
        return $this->question3;
    }

    public function setQuestion3(?string $question3): self
    {
        $this->question3 = $question3;

        return $this;
    }

    public function getQuestion4(): ?string
    {
        return $this->question4;
    }

    public function setQuestion4(?string $question4): self
    {
        $this->question4 = $question4;

        return $this;
    }

    public function getQuestion5(): ?string
    {
        return $this->question5;
    }

    public function setQuestion5(?string $question5): self
    {
        $this->question5 = $question5;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getParentsJarIdUser(): ?Parents
    {
        return $this->parentsJarIdUser;
    }

    public function setParentsJarIdUser(?Parents $parentsJarIdUser): self
    {
        $this->parentsJarIdUser = $parentsJarIdUser;

        return $this;
    }

    public function getJardins(): ?Jardin
    {
        return $this->jardins;
    }

    public function setJardins(?Jardin $jardins): self
    {
        $this->jardins = $jardins;

        return $this;
    }


}
