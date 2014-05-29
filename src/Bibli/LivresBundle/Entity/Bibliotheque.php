<?php

namespace Bibli\LivresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bibliotheque
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Bibliotheque
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
     * @var integer
     *
     * @ORM\Column(name="NumBiblio", type="integer")
     */
    private $NumBiblio;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50)
     */
    private $Nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Code", type="string", length=8)
     */
    private $Code;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255)
     */
    private $Adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="CodePostal", type="string", length=10)
     */
    private $CodePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=50)
     */
    private $Ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=20)
     */
    private $Tel;

    /**
     * @var string
     *
     * @ORM\Column(name="Information", type="string", length=255)
     */
    private $Information;

    /**
     * @var string
     *
     * @ORM\Column(name="Intitule", type="string", length=255)
     */
    private $Intitule;


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
     * Set NumBiblio
     *
     * @param integer $numBiblio
     * @return Bibliotheque
     */
    public function setNumBiblio($numBiblio)
    {
        $this->NumBiblio = $numBiblio;
    
        return $this;
    }

    /**
     * Get NumBiblio
     *
     * @return integer 
     */
    public function getNumBiblio()
    {
        return $this->NumBiblio;
    }

    /**
     * Set Nom
     *
     * @param string $nom
     * @return Bibliotheque
     */
    public function setNom($nom)
    {
        $this->Nom = $nom;
    
        return $this;
    }

    /**
     * Get Nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set Code
     *
     * @param string $code
     * @return Bibliotheque
     */
    public function setCode($code)
    {
        $this->Code = $code;
    
        return $this;
    }

    /**
     * Get Code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * Set Adresse
     *
     * @param string $adresse
     * @return Bibliotheque
     */
    public function setAdresse($adresse)
    {
        $this->Adresse = $adresse;
    
        return $this;
    }

    /**
     * Get Adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * Set CodePostal
     *
     * @param string $codePostal
     * @return Bibliotheque
     */
    public function setCodePostal($codePostal)
    {
        $this->CodePostal = $codePostal;
    
        return $this;
    }

    /**
     * Get CodePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->CodePostal;
    }

    /**
     * Set Ville
     *
     * @param string $ville
     * @return Bibliotheque
     */
    public function setVille($ville)
    {
        $this->Ville = $ville;
    
        return $this;
    }

    /**
     * Get Ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->Ville;
    }

    /**
     * Set Tel
     *
     * @param string $tel
     * @return Bibliotheque
     */
    public function setTel($tel)
    {
        $this->Tel = $tel;
    
        return $this;
    }

    /**
     * Get Tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->Tel;
    }

    /**
     * Set Information
     *
     * @param string $information
     * @return Bibliotheque
     */
    public function setInformation($information)
    {
        $this->Information = $information;
    
        return $this;
    }

    /**
     * Get Information
     *
     * @return string 
     */
    public function getInformation()
    {
        return $this->Information;
    }

    /**
     * Set Intitule
     *
     * @param string $intitule
     * @return Bibliotheque
     */
    public function setIntitule($intitule)
    {
        $this->Intitule = $intitule;
    
        return $this;
    }

    /**
     * Get Intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->Intitule;
    }
}
