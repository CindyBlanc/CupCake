<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 * @UniqueEntity(fields={"username"}, message="Ce nom d'utilisateur existe deja")
 */
class Utilisateur implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=5, 
     * max=12, 
     * minMessage="Nom d'utilisateur trop court", 
     * maxMessage="Nom d'utilisateur trop long")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=5, 
     * max=12, 
     * minMessage="Mot de passe trop court", 
     * maxMessage="Mot de passe trop long")
     */
    private $password;

      /**
     * @Assert\Length(
     * min=5, 
     * max=12, 
     * minMessage="Mot de passe trop court", 
     * maxMessage="Mot de passe trop long")
     * 
     * @Assert\EqualTo(propertyPath="password", 
     * message="Vos mots de passe ne correspondent pas")
     * 
     */
    private $verificationPassword;

    /**
     * @ORM\OneToMany(targetEntity=CupCake::class, mappedBy="auteur")
     */
    private $cupCakes;

    public function __construct()
    {
        $this->cupCakes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getVerificationPassword(): ?string
    {
        return $this->verificationPassword;
    }

    public function setVerificationPassword(string $verificationPassword): self
    {
        $this->verificationPassword = $verificationPassword;

        return $this;
    }

    public function eraseCredentials() // Mot de passe stocker temporaire et l'effacer
    {
        
    }

    public function getSalt() { // rendre le hachage sera unique 

    }

    public function getRoles() // role qu'on defini par rapport aux users 
    {
        return ['ROLE_USER']; 
    }

    /**
     * @return Collection|CupCake[]
     */
    public function getCupCakes(): Collection
    {
        return $this->cupCakes;
    }

    public function addCupCake(CupCake $cupCake): self
    {
        if (!$this->cupCakes->contains($cupCake)) {
            $this->cupCakes[] = $cupCake;
            $cupCake->setAuteur($this);
        }

        return $this;
    }

    public function removeCupCake(CupCake $cupCake): self
    {
        if ($this->cupCakes->removeElement($cupCake)) {
            // set the owning side to null (unless already changed)
            if ($cupCake->getAuteur() === $this) {
                $cupCake->setAuteur(null);
            }
        }

        return $this;
    }
}
