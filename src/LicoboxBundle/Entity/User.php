<?php

namespace LicoboxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
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
     * @var string
     */
    private $pass;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var \LicoboxBundle\Entity\Capture
     */
    private $capture;


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
     * @return User
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
     * Set pass
     *
     * @param string $pass
     * @return User
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string 
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set capture
     *
     * @param \LicoboxBundle\Entity\Capture $capture
     * @return User
     */
    public function setCapture(\LicoboxBundle\Entity\Capture $capture = null)
    {
        $this->capture = $capture;

        return $this;
    }

    /**
     * Get capture
     *
     * @return \LicoboxBundle\Entity\Capture 
     */
    public function getCapture()
    {
        return $this->capture;
    }
}
