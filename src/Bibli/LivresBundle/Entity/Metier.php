<?php

namespace Bibli\LivresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Metier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bibli\LivresBundle\Entity\MetierRepository")
 */
class Metier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Metier", type="string", length=50)
     */
    private $Metier;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $Description;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Metier
     *
     * @param string $metier
     * @return Metier
     */
    public function setMetier($metier)
    {
        $this->Metier = $metier;
    
        return $this;
    }

    /**
     * Get Metier
     *
     * @return string 
     */
    public function getMetier()
    {
        return $this->Metier;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return Metier
     */
    public function setDescription($description)
    {
        $this->Description = $description;
    
        return $this;
    }

    /**
     * Get Description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->Description;
    }
}
