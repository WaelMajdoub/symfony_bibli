<?php

namespace Bibli\LivresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bibli\LivresBundle\Entity\PaysRepository")
 */
class Pays
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
     * @ORM\Column(name="Pays", type="string", length=50)
     */
    private $Pays;

    /**
     * @var string
     *
     * @ORM\Column(name="Nationalite", type="string", length=50)
     */
    private $Nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="Capitale", type="string", length=50)
     */
    private $Capitale;

    /**
     * @var string
     *
     * @ORM\Column(name="Continent", type="string", length=50)
     */
    private $Continent;


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
     * Set Pays
     *
     * @param string $pays
     * @return Pays
     */
    public function setPays($pays)
    {
        $this->Pays = $pays;
    
        return $this;
    }

    /**
     * Get Pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->Pays;
    }

    /**
     * Set Nationalite
     *
     * @param string $nationalite
     * @return Pays
     */
    public function setNationalite($nationalite)
    {
        $this->Nationalite = $nationalite;
    
        return $this;
    }

    /**
     * Get Nationalite
     *
     * @return string 
     */
    public function getNationalite()
    {
        return $this->Nationalite;
    }

    /**
     * Set Capitale
     *
     * @param string $capitale
     * @return Pays
     */
    public function setCapitale($capitale)
    {
        $this->Capitale = $capitale;
    
        return $this;
    }

    /**
     * Get Capitale
     *
     * @return string 
     */
    public function getCapitale()
    {
        return $this->Capitale;
    }

    /**
     * Set Continent
     *
     * @param string $continent
     * @return Pays
     */
    public function setContinent($continent)
    {
        $this->Continent = $continent;
    
        return $this;
    }

    /**
     * Get Continent
     *
     * @return string 
     */
    public function getContinent()
    {
        return $this->Continent;
    }
}
