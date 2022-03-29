<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Enfant
 *
 * @ORM\Table(name="enfant", indexes={@ORM\Index(name="FKe7bg8dqpish2b1yldgmoalxyg", columns={"parents_id_user"})})
 * @ORM\Entity
 */
class Enfant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_enfant", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEnfant;

    /**
     * @var string|null
     * @Assert\NotBlank(message="must not be blanck")
     * @ORM\Column(name="addresse", type="string", length=255, nullable=true)
     */
    private $addresse;

    /**
     * @var \DateTime|null
     * @Assert\NotBlank(message="must not be blanck")
     * @ORM\Column(name="date_nais", type="datetime", nullable=true)
     */
    private $dateNais;

    /**
     * @var string|null
     * @Assert\NotBlank(message="must not be blanck")
     * @ORM\Column(name="gender", type="string", length=255, nullable=true)
     */
    private $gender;

    /**
     * @var string|null
     * @Assert\NotBlank(message="must not be blanck")
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     * @Assert\NotBlank(message="must not be blanck")
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var \Parents
     *
     * @ORM\ManyToOne(targetEntity="Parents")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parents_id_user", referencedColumnName="id_user")
     * })
     */
    private $parentsIdUser;

    public function getIdEnfant(): ?string
    {
        return $this->idEnfant;
    }

    public function getAddresse(): ?string
    {
        return $this->addresse;
    }

    public function setAddresse(?string $addresse): self
    {
        $this->addresse = $addresse;

        return $this;
    }

    public function getDateNais(): ?\DateTimeInterface
    {
        return $this->dateNais;
    }

    public function setDateNais(?\DateTimeInterface $dateNais): self
    {
        $this->dateNais = $dateNais;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getParentsIdUser(): ?Parents
    {
        return $this->parentsIdUser;
    }

    public function setParentsIdUser(?Parents $parentsIdUser): self
    {
        $this->parentsIdUser = $parentsIdUser;

        return $this;
    }


}
