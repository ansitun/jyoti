<?php
// src/AppBundle/Entity/Services.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Services")
 */
class Services
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $sid;

    /**
     * @ORM\Column(type="string", length=256, nullable=false)
     */
    protected $sname;    
    
    /**
     * @ORM\Column(type="string", length=256, nullable=false)
     */
    protected $smgr; 
        
    /**
     * @ORM\Column(type="string", length=256, nullable=false)
     */
    protected $sloc; 
    
    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    protected $sactive;    
    

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
     * Set sid
     *
     * @param int $sid
     * @return Services
     */
    public function setSid($sid)
    {
        $this->sid = $sid;

        return $this;
    }

    /**
     * Get sid
     *
     * @return int 
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set sname
     *
     * @param string $sname
     * @return Services
     */
    public function setSname($sname)
    {
        $this->sname = $sname;

        return $this;
    }

    /**
     * Get sname
     *
     * @return string 
     */
    public function getSname()
    {
        return $this->sname;
    }

    /**
     * Set smgr
     *
     * @param string $smgr
     * @return Services
     */
    public function setSmgr($smgr)
    {
        $this->smgr = $smgr;

        return $this;
    }

    /**
     * Get smgr
     *
     * @return string 
     */
    public function getSmgr()
    {
        return $this->smgr;
    }

    /**
     * Set sloc
     *
     * @param string $sloc
     * @return Services
     */
    public function setSloc($sloc)
    {
        $this->sloc = $sloc;

        return $this;
    }

    /**
     * Get sloc
     *
     * @return string 
     */
    public function getSloc()
    {
        return $this->sloc;
    }
    
    /**
     * Set sactive
     *
     * @param boolean $sactive
     * @return Services
     */
    public function setSactive($sactive)
    {
        $this->sactive = $sactive;

        return $this;
    }

    /**
     * Get sactive
     *
     * @return boolean 
     */
    public function getSactive()
    {
        return $this->sactive;
    }
}
