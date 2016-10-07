<?php

namespace LicoboxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Licorne
 */
class Licorne
{



    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \LicoboxBundle\Entity\Eyes
     */
    private $eyes;

    /**
     * @var \LicoboxBundle\Entity\Corne
     */
    private $corne;

    /**
     * @var \LicoboxBundle\Entity\Pelage
     */
    private $pelage;

    /**
     * @var \LicoboxBundle\Entity\Habitat
     */
    private $habitat;


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
     * Set name
     *
     * @param string $name
     * @return Licorne
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set eyes
     *
     * @param \LicoboxBundle\Entity\Eyes $eyes
     * @return Licorne
     */
    public function setEyes(\LicoboxBundle\Entity\Eyes $eyes = null)
    {
        $this->eyes = $eyes;

        return $this;
    }

    /**
     * Get eyes
     *
     * @return \LicoboxBundle\Entity\Eyes 
     */
    public function getEyes()
    {
        return $this->eyes;
    }

    /**
     * Set corne
     *
     * @param \LicoboxBundle\Entity\Corne $corne
     * @return Licorne
     */
    public function setCorne(\LicoboxBundle\Entity\Corne $corne = null)
    {
        $this->corne = $corne;

        return $this;
    }

    /**
     * Get corne
     *
     * @return \LicoboxBundle\Entity\Corne 
     */
    public function getCorne()
    {
        return $this->corne;
    }

    /**
     * Set pelage
     *
     * @param \LicoboxBundle\Entity\Pelage $pelage
     * @return Licorne
     */
    public function setPelage(\LicoboxBundle\Entity\Pelage $pelage = null)
    {
        $this->pelage = $pelage;

        return $this;
    }

    /**
     * Get pelage
     *
     * @return \LicoboxBundle\Entity\Pelage 
     */
    public function getPelage()
    {
        return $this->pelage;
    }

    /**
     * Set habitat
     *
     * @param \LicoboxBundle\Entity\Habitat $habitat
     * @return Licorne
     */
    public function setHabitat(\LicoboxBundle\Entity\Habitat $habitat = null)
    {
        $this->habitat = $habitat;

        return $this;
    }

    /**
     * Get habitat
     *
     * @return \LicoboxBundle\Entity\Habitat 
     */
    public function getHabitat()
    {
        return $this->habitat;
    }
}
