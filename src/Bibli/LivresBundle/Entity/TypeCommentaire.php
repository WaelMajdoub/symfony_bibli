<?php

namespace Bibli\LivresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeCommentaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bibli\LivresBundle\Entity\TypeCommentaireRepository")
 */
class TypeCommentaire
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
     * @ORM\Column(name="NomType", type="string", length=50)
     */
    private $NomType;


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
     * Set NomType
     *
     * @param string $nomType
     * @return TypeCommentaire
     */
    public function setNomType($nomType)
    {
        $this->NomType = $nomType;
    
        return $this;
    }

    /**
     * Get NomType
     *
     * @return string 
     */
    public function getNomType()
    {
        return $this->NomType;
    }
}
