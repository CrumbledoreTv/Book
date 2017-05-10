<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Apprenant
 *
 * @ORM\Table(name="apprenant")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ApprenantRepository")
 */
class Apprenant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth", type="date")
     */
    private $birth;

    /**
     * @var int
     *
     * @ORM\Column(name="promo", type="integer")
     */
    private $promo;

    /**
     * @var string
     *
     * @ORM\Column(name="dispo", type="string", length=255)
     */
    private $dispo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="skills", type="string", length=255)
     */
    private $skills;

    /**
     * @var string
     *
     * @ORM\Column(name="img_profil", type="string", length=255)
     * @Assert\File(mimeTypes={ "application/pdf", "image/jpeg" })
     */
    private $imgProfil;

    /**
     * @var string
     *
     * @ORM\Column(name="cv", type="string", length=255)
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    private $cv;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Apprenant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Apprenant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set birth
     *
     * @param \DateTime $birth
     *
     * @return Apprenant
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get birth
     *
     * @return \DateTime
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set promo
     *
     * @param integer $promo
     *
     * @return Apprenant
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return int
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set dispo
     *
     * @param string $dispo
     *
     * @return Apprenant
     */
    public function setDispo($dispo)
    {
        $this->dispo = $dispo;

        return $this;
    }

    /**
     * Get dispo
     *
     * @return string
     */
    public function getDispo()
    {
        return $this->dispo;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Apprenant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Apprenant
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set skills
     *
     * @param string $skills
     *
     * @return Apprenant
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * Get skills
     *
     * @return string
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set imgProfil
     *
     * @param string $imgProfil
     *
     * @return Apprenant
     */
    public function setImgProfil($imgProfil)
    {
        $this->imgProfil = $imgProfil;

        return $this;
    }

    /**
     * Get imgProfil
     *
     * @return string
     */
    public function getImgProfil()
    {
        return $this->imgProfil;
    }

    /**
     * Set cv
     *
     * @param string $cv
     *
     * @return Apprenant
     */
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get cv
     *
     * @return string
     */
    public function getCv()
    {
        return $this->cv;
    }
}
