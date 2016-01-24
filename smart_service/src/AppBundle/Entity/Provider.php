<?php
// src/AppBundle/Entity/Provider.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Provider")
 */
class Provider
{   
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=64, nullable=false)
     */
    protected $pid;

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
     * Set pid
     *
     * @param string $pid
     * @return Provider
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Get pid
     *
     * @return string 
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set fname
     *
     * @param string $fname
     * @return Provider
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
     * @return Provider
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
     * @return Provider
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
     * @return Provider
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
     * @return Provider
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
