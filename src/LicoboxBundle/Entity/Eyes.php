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
    private $color;


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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $licorne;


    /**
     * Add licorne
     *
     * @param \LicoboxBundle\Entity\Licorne $licorne
     * @return Eyes
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
