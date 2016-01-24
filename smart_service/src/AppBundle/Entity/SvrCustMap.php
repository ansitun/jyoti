<?php
// src/AppBundle/Entity/SvrCustMap.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="SvrCustMap")
 */
class SvrCustMap
{
    /**
     * @ORM\Column(type="string", length=64, nullable=false)
     */
    protected $cid;
    
    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $sid;
       
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     */
    protected $mapid;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    protected $hasSubs;    
    

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
     * @return SvrCustMap
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
     * Set mapid
     *
     * @param int $mapid
     * @return SvrCustMap
     */
    public function setMapid($mapid)
    {
        $this->mapid = $mapid;

        return $this;
    }

    /**
     * Get mapid
     *
     * @return int 
     */
    public function getMapid()
    {
        return $this->mapid;
    }
    
    /**
     * Set cid
     *
     * @param string $cid
     * @return SvrCustMap
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
     * Set sactive
     *
     * @param boolean $hasSubs
     * @return SvrCustMap
     */
    public function setHasSubs($hasSubs)
    {
        $this->hasSubs = $hasSubs;

        return $this;
    }

    /**
     * Get sactive
     *
     * @return boolean 
     */
    public function getHasSubs()
    {
        return $this->hasSubs;
    }
}
