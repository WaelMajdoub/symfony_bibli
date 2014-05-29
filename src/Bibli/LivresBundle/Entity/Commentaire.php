<?php

namespace Bibli\LivresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bibli\LivresBundle\Entity\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\Column(name="NumComment", type="integer")
     */
    private $NumComment;

    /**
     * @var integer
     *
     * @ORM\Column(name="NumLivre", type="integer")
     */
    private $NumLivre;

    /**
     * @var string
     *
     * @ORM\Column(name="TitreComment", type="string", length=255)
     */
    private $TitreComment;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="text")
     */
    private $Contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime")
     */
    private $Date;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeComment", type="string", length=30)
     */
    private $TypeComment;

    /**
     * @var integer
     *
     * @ORM\Column(name="Note", type="smallint")
     */
    private $Note;

    /**
     * @var boolean
     * Protection du commentaire si on veut le "locker"
     * @ORM\Column(name="Protection", type="boolean")
     */
    private $Protection;

    /**
     * @var string
     * Source du commentaire
     * @ORM\Column(name="Source", type="string", length=255)
     */
    private $Source;


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
     * Set NumComment
     *
     * @param integer $numComment
     * @return Commentaire
     */
    public function setNumComment($numComment)
    {
        $this->NumComment = $numComment;
    
        return $this;
    }

    /**
     * Get NumComment
     *
     * @return integer 
     */
    public function getNumComment()
    {
        return $this->NumComment;
    }

    /**
     * Set NumLivre
     *
     * @param integer $numLivre
     * @return Commentaire
     */
    public function setNumLivre($numLivre)
    {
        $this->NumLivre = $numLivre;
    
        return $this;
    }

    /**
     * Get NumLivre
     *
     * @return integer 
     */
    public function getNumLivre()
    {
        return $this->NumLivre;
    }

    /**
     * Set TitreComment
     *
     * @param string $titreComment
     * @return Commentaire
     */
    public function setTitreComment($titreComment)
    {
        $this->TitreComment = $titreComment;
    
        return $this;
    }

    /**
     * Get TitreComment
     *
     * @return string 
     */
    public function getTitreComment()
    {
        return $this->TitreComment;
    }

    /**
     * Set Contenu
     *
     * @param string $contenu
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->Contenu = $contenu;
    
        return $this;
    }

    /**
     * Get Contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->Contenu;
    }

    /**
     * Set Date
     *
     * @param \DateTime $date
     * @return Commentaire
     */
    public function setDate($date)
    {
        $this->Date = $date;
    
        return $this;
    }

    /**
     * Get Date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Set TypeComment
     *
     * @param string $typeComment
     * @return Commentaire
     */
    public function setTypeComment($typeComment)
    {
        $this->TypeComment = $typeComment;
    
        return $this;
    }

    /**
     * Get TypeComment
     *
     * @return string 
     */
    public function getTypeComment()
    {
        return $this->TypeComment;
    }

    /**
     * Set Note
     *
     * @param integer $note
     * @return Commentaire
     */
    public function setNote($note)
    {
        $this->Note = $note;
    
        return $this;
    }

    /**
     * Get Note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->Note;
    }

    /**
     * Set Protection
     *
     * @param boolean $protection
     * @return Commentaire
     */
    public function setProtection($protection)
    {
        $this->Protection = $protection;
    
        return $this;
    }

    /**
     * Get Protection
     *
     * @return boolean 
     */
    public function getProtection()
    {
        return $this->Protection;
    }

    /**
     * Set Source
     *
     * @param string $source
     * @return Commentaire
     */
    public function setSource($source)
    {
        $this->Source = $source;
    
        return $this;
    }

    /**
     * Get Source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->Source;
    }
}
