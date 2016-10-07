<?php

namespace LicoboxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Pelage
 */
class Pelage
{
    public function __toString()
    {
        return $this->type;
    }

    /**
     * @OneToMany(targetEntity="Licorne", mappedBy="Pelage")
     */
    private $Licorne;

    function __construct()
    {
        $this->Licorne = new ArrayCollection();
    }


    // CODE GENERE //


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $licornes;


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
     * Add licornes
     *
     * @param \LicoboxBundle\Entity\Licorne $licornes
     * @return Pelage
     */
    public function addLicorne(\LicoboxBundle\Entity\Licorne $licornes)
    {
        $this->licornes[] = $licornes;

        return $this;
    }

    /**
     * Remove licornes
     *
     * @param \LicoboxBundle\Entity\Licorne $licornes
     */
    public function removeLicorne(\LicoboxBundle\Entity\Licorne $licornes)
    {
        $this->licornes->removeElement($licornes);
    }

    /**
     * Get licornes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLicornes()
    {
        return $this->licornes;
    }
}
