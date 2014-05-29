<?php

namespace Bibli\LivresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bibli\LivresBundle\Entity\AuteurRepository")
 */
class Auteur
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
     * @ORM\Column(name="Num2", type="integer")
     */
    private $Num2;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=100)
     */
    private $Nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=50)
     */
    private $Prenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="Pays", type="integer")
     */
    private $Pays;

    /**
    * @ORM\ManyToMany(targetEntity="Bibli\LivresBundle\Entity\Pays",
    * cascade={"persist"})
    */
    // Attention : ci-dessous on a une liste d'objets : un ArrayCollection
    private $SesPays; // ATTENTION : ici liste d'objets:ArrayCollection !

    /**
     * @var string
     *
     * @ORM\Column(name="Style", type="string", length=50)
     */
    private $Style;

    /**
     * @var integer
     *
     * @ORM\Column(name="Metier", type="integer")
     */
    private $Metier;

    /**
     * @var integer
     *
     * @ORM\Column(name="Metier2", type="integer")
     */
    private $Metier2;

    /**
    * @ORM\ManyToMany(targetEntity="Bibli\LivresBundle\Entity\Metier",
    * cascade={"persist"})
    */
    // Attention : ci-dessous on a une liste d'objets : un ArrayCollection
    private $metiers; // ATTENTION : ici liste d'objets:ArrayCollection !

    
    /**
     * @var string
     *
     * @ORM\Column(name="DateNaiss", type="string", length=50)
     */
    private $DateNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="text")
     */
    private $Commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="Epoque", type="string", length=50)
     */
    private $Epoque;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire2", type="text")
     */
    private $Commentaire2;

    /**
     * @var string
     *
     * @ORM\Column(name="Travaux", type="text")
     */
    private $Travaux;

    /**
     * @var string
     *
     * @ORM\Column(name="Bibliographie", type="text")
     */
    private $Bibliographie;

    /**
     * @var string
     *
     * @ORM\Column(name="Publications", type="text")
     */
    private $Publications;

    /**
     * @var string
     *
     * @ORM\Column(name="Notes", type="text")
     */
    private $Notes;


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
     * Set Num2
     *
     * @param integer $num2
     * @return Auteur
     */
    public function setNum2($num2)
    {
        $this->Num2 = $num2;
    
        return $this;
    }

    /**
     * Get Num2
     *
     * @return integer 
     */
    public function getNum2()
    {
        return $this->Num2;
    }

    /**
     * Set Nom
     *
     * @param string $nom
     * @return Auteur
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
     * Set Prenom
     *
     * @param string $prenom
     * @return Auteur
     */
    public function setPrenom($prenom)
    {
        $this->Prenom = $prenom;
    
        return $this;
    }

    /**
     * Get Prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set Pays
     *
     * @param integer $pays
     * @return Auteur
     */
    public function setPays($pays)
    {
        $this->Pays = $pays;
    
        return $this;
    }

    /**
     * Get Pays
     *
     * @return integer 
     */
    public function getPays()
    {
        return $this->Pays;
    }

    /**
     * Set Style
     *
     * @param string $style
     * @return Auteur
     */
    public function setStyle($style)
    {
        $this->Style = $style;
    
        return $this;
    }

    /**
     * Get Style
     *
     * @return string 
     */
    public function getStyle()
    {
        return $this->Style;
    }

    /**
     * Set Metier
     *
     * @param integer $metier
     * @return Auteur
     */
    public function setMetier($metier)
    {
        $this->Metier = $metier;
    
        return $this;
    }

    /**
     * Get Metier
     *
     * @return integer 
     */
    public function getMetier()
    {
        return $this->Metier;
    }

    /**
     * Set Metier2
     *
     * @param integer $metier2
     * @return Auteur
     */
    public function setMetier2($metier2)
    {
        $this->Metier2 = $metier2;
    
        return $this;
    }

    /**
     * Get Metier2
     *
     * @return integer 
     */
    public function getMetier2()
    {
        return $this->Metier2;
    }

    /**
     * Set DateNaiss
     *
     * @param string $dateNaiss
     * @return Auteur
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->DateNaiss = $dateNaiss;
    
        return $this;
    }

    /**
     * Get DateNaiss
     *
     * @return string 
     */
    public function getDateNaiss()
    {
        return $this->DateNaiss;
    }

    /**
     * Set Commentaire
     *
     * @param string $commentaire
     * @return Auteur
     */
    public function setCommentaire($commentaire)
    {
        $this->Commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get Commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->Commentaire;
    }

    /**
     * Set Epoque
     *
     * @param string $epoque
     * @return Auteur
     */
    public function setEpoque($epoque)
    {
        $this->Epoque = $epoque;
    
        return $this;
    }

    /**
     * Get Epoque
     *
     * @return string 
     */
    public function getEpoque()
    {
        return $this->Epoque;
    }

    /**
     * Set Commentaire2
     *
     * @param string $commentaire2
     * @return Auteur
     */
    public function setCommentaire2($commentaire2)
    {
        $this->Commentaire2 = $commentaire2;
    
        return $this;
    }

    /**
     * Get Commentaire2
     *
     * @return string 
     */
    public function getCommentaire2()
    {
        return $this->Commentaire2;
    }

    /**
     * Set Travaux
     *
     * @param string $travaux
     * @return Auteur
     */
    public function setTravaux($travaux)
    {
        $this->Travaux = $travaux;
    
        return $this;
    }

    /**
     * Get Travaux
     *
     * @return string 
     */
    public function getTravaux()
    {
        return $this->Travaux;
    }

    /**
     * Set Bibliographie
     *
     * @param string $bibliographie
     * @return Auteur
     */
    public function setBibliographie($bibliographie)
    {
        $this->Bibliographie = $bibliographie;
    
        return $this;
    }

    /**
     * Get Bibliographie
     *
     * @return string 
     */
    public function getBibliographie()
    {
        return $this->Bibliographie;
    }

    /**
     * Set Publications
     *
     * @param string $publications
     * @return Auteur
     */
    public function setPublications($publications)
    {
        $this->Publications = $publications;
    
        return $this;
    }

    /**
     * Get Publications
     *
     * @return string 
     */
    public function getPublications()
    {
        return $this->Publications;
    }

    /**
     * Set Notes
     *
     * @param string $notes
     * @return Auteur
     */
    public function setNotes($notes)
    {
        $this->Notes = $notes;
    
        return $this;
    }

    /**
     * Get Notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->Notes;
    }
}
