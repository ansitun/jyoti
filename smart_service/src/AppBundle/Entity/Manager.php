<?php
// src/AppBundle/Entity/Manager.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Manager")
 */
class Manager
{   
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=64, nullable=false)
     */
    protected $aid;

    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    protected $fname;    
    
    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    protected $lname;    
    
    /**
     * @ORM\Column(type="string", length=256, nullable=false)
     */
    protected $passwd;    
    
    /**
     * @ORM\Column(type="string", length=256, nullable=false)
     */
    protected $email;    
    
    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    protected $hasAuth;    
    

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
     * Set aid
     *
     * @param string $aid
     * @return Manager
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get aid
     *
     * @return string 
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set fname
     *
     * @param string $fname
     * @return Manager
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string 
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     * @return Manager
     */
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * Get lname
     *
     * @return string 
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set passwd
     *
     * @param string $passwd
     * @return Manager
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string 
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Manager
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set hasAuth
     *
     * @param boolean $hasAuth
     * @return Manager
     */
    public function setHasAuth($hasAuth)
    {
        $this->hasAuth = $hasAuth;

        return $this;
    }

    /**
     * Get hasAuth
     *
     * @return boolean 
     */
    public function getHasAuth()
    {
        return $this->hasAuth;
    }
}
