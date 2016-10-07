<?php

namespace LicoboxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Capture
 */
class Capture
{
    public function __toString()
    {
        return $this->Id_Licorne;
    }

    public function __construct()
    {
        $this ->dateCapture = new \DateTime();
    }


    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateCapture;

    /**
     * @var \LicoboxBundle\Entity\Licorne
     */
    private $Id_Licorne;

    /**
     * @var \LicoboxBundle\Entity\User
     */
    private $Id_User;


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
     * Get dateCapture
     *
     * @return \DateTime 
     */
    public function getDateCapture()
    {
        return $this->dateCapture;
    }

    /**
     * Set Id_Licorne
     *
     * @param \LicoboxBundle\Entity\Licorne $idLicorne
     * @return Capture
     */
    public function setIdLicorne(\LicoboxBundle\Entity\Licorne $idLicorne = null)
    {
        $this->Id_Licorne = $idLicorne;

        return $this;
    }

    /**
     * Get Id_Licorne
     *
     * @return \LicoboxBundle\Entity\Licorne 
     */
    public function getIdLicorne()
    {
        return $this->Id_Licorne;
    }

    /**
     * Set Id_User
     *
     * @param \LicoboxBundle\Entity\User $idUser
     * @return Capture
     */
    public function setIdUser(\LicoboxBundle\Entity\User $idUser = null)
    {
        $this->Id_User = $idUser;

        return $this;
    }

    /**
     * Get Id_User
     *
     * @return \LicoboxBundle\Entity\User 
     */
    public function getIdUser()
    {
        return $this->Id_User;
    }

    /**
     * Set dateCapture
     *
     * @param \DateTime $dateCapture
     * @return Capture
     */
    public function setDateCapture($dateCapture)
    {
        $this->dateCapture = $dateCapture;

        return $this;
    }
}
