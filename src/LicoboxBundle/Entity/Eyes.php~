<?php

namespace LicoboxBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Eyes
 */
class Eyes
{
    public function __toString()
    {
        return $this->color;
    }


    // CODE GENERE //


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $color;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $licornes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->licornes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set color
     *
     * @param string $color
     * @return Eyes
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Add licornes
     *
     * @param \LicoboxBundle\Entity\Licorne $licornes
     * @return Eyes
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
