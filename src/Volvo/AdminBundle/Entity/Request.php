<?php

namespace Volvo\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Request
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Volvo\AdminBundle\Entity\RequestRepository")
 */
class Request
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\OneToOne(targetEntity="Volvo\SecurityBundle\Entity\User")
     */
    private $user;
    
    /**
     * @ORM\OneToOne(targetEntity="Volvo\AdminBundle\Entity\BABU")
     */
    private $babu;
    
    /**
     * @ORM\OneToOne(targetEntity="Volvo\AdminBundle\Entity\ActionType")
     */
    private $actionType;
    
    /**
     * @ORM\OneToOne(targetEntity="Volvo\AdminBundle\Entity\RequestType")
     */
    private $requestType;
    
    /**
     * @ORM\OneToOne(targetEntity="Volvo\AdminBundle\Entity\Supplier")
     */
    private $supplier;
    
    /**
     * @ORM\OneToOne(targetEntity="Volvo\AdminBundle\Entity\Platform")
     */
    private $platform;
    
    /**
     * @ORM\OneToOne(targetEntity="Volvo\AdminBundle\Entity\VolvoUser")
     */
    private $volvoUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="timeSpent", type="integer")
     */
    private $timeSpent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetime")
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;


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
     * Set timeSpent
     *
     * @param integer $timeSpent
     * @return Request
     */
    public function setTimeSpent($timeSpent)
    {
        $this->timeSpent = $timeSpent;
    
        return $this;
    }

    /**
     * Get timeSpent
     *
     * @return integer 
     */
    public function getTimeSpent()
    {
        return $this->timeSpent;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Request
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Request
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Request
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set user
     *
     * @param \Volvo\SecurityBundle\Entity\User $user
     * @return Request
     */
    public function setUser(\Volvo\SecurityBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Volvo\SecurityBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set babu
     *
     * @param \Volvo\AdminBundle\Entity\BABU $babu
     * @return Request
     */
    public function setBabu(\Volvo\AdminBundle\Entity\BABU $babu = null)
    {
        $this->babu = $babu;
    
        return $this;
    }

    /**
     * Get babu
     *
     * @return \Volvo\AdminBundle\Entity\BABU 
     */
    public function getBabu()
    {
        return $this->babu;
    }

    /**
     * Set actionType
     *
     * @param \Volvo\AdminBundle\Entity\ActionType $actionType
     * @return Request
     */
    public function setActionType(\Volvo\AdminBundle\Entity\ActionType $actionType = null)
    {
        $this->actionType = $actionType;
    
        return $this;
    }

    /**
     * Get actionType
     *
     * @return \Volvo\AdminBundle\Entity\ActionType 
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Set requestType
     *
     * @param \Volvo\AdminBundle\Entity\RequestType $requestType
     * @return Request
     */
    public function setRequestType(\Volvo\AdminBundle\Entity\RequestType $requestType = null)
    {
        $this->requestType = $requestType;
    
        return $this;
    }

    /**
     * Get requestType
     *
     * @return \Volvo\AdminBundle\Entity\RequestType 
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Set supplier
     *
     * @param \Volvo\AdminBundle\Entity\Supplier $supplier
     * @return Request
     */
    public function setSupplier(\Volvo\AdminBundle\Entity\Supplier $supplier = null)
    {
        $this->supplier = $supplier;
    
        return $this;
    }

    /**
     * Get supplier
     *
     * @return \Volvo\AdminBundle\Entity\Supplier 
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set platform
     *
     * @param \Volvo\AdminBundle\Entity\Platform $platform
     * @return Request
     */
    public function setPlatform(\Volvo\AdminBundle\Entity\Platform $platform = null)
    {
        $this->platform = $platform;
    
        return $this;
    }

    /**
     * Get platform
     *
     * @return \Volvo\AdminBundle\Entity\Platform 
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Set volvoUser
     *
     * @param \Volvo\AdminBundle\Entity\VolvoUser $volvoUser
     * @return Request
     */
    public function setVolvoUser(\Volvo\AdminBundle\Entity\VolvoUser $volvoUser = null)
    {
        $this->volvoUser = $volvoUser;
    
        return $this;
    }

    /**
     * Get volvoUser
     *
     * @return \Volvo\AdminBundle\Entity\VolvoUser 
     */
    public function getVolvoUser()
    {
        return $this->volvoUser;
    }
}