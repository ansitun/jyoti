<?php
// src/AppBundle/Entity/Customer.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Customer")
 */
class Customer
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=64, nullable=false)
     */
    protected $cid;

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
     * Set cid
     *
     * @param string $cid
     * @return Customer
     */
    public function setCid($cid)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Get cid
     *
     * @return string 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set fname
     *
     * @param string $fname
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
