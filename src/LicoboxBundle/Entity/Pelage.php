<?php

namespace LicoboxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pelage
 */
class Pelage
{
    public function __toString()
    {
        return $this->type;
    }

    function __construct()
    {
        $this->Licorne = new ArrayCollection();
    }


    // CODE GENERE //

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $type;


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
     * Set type
     *
     * @param string $type
     * @return Pelage
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $licorne;


    /**
     * Add licorne
     *
     * @param \LicoboxBundle\Entity\Licorne $licorne
     * @return Pelage
     */
    public function addLicorne(\LicoboxBundle\Entity\Licorne $licorne)
    {
        $this->licorne[] = $licorne;

        return $this;
    }

    /**
     * Remove licorne
     *
     * @param \LicoboxBundle\Entity\Licorne $licorne
     */
    public function removeLicorne(\LicoboxBundle\Entity\Licorne $licorne)
    {
        $this->licorne->removeElement($licorne);
    }

    /**
     * Get licorne
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLicorne()
    {
        return $this->licorne;
    }
}
