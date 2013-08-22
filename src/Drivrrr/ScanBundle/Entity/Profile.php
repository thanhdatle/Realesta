<?php
namespace Drivrrr\ScanBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/** 
 * @ORM\Entity
 */
class Profile
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /** 
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $first_name;

    /** 
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $last_name;

    /** 
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $gender;

    /** 
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $address;

    /** 
     * @ORM\OneToOne(targetEntity="UserAcc", inversedBy="Profile")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, unique=true)
     */
    private $User;

    /**
     * Set user_id
     *
     * @param integer $userId
     * @return Profile
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
    
        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set first_name
     *
     * @param string $firstName
     * @return Profile
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    
        return $this;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return Profile
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    
        return $this;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Profile
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Profile
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set User
     *
     * @param \Drivrrr\ScanBundle\Entity\UserAcc $user
     * @return Profile
     */
    public function setUser(\Drivrrr\ScanBundle\Entity\UserAcc $user)
    {
        $this->User = $user;
    
        return $this;
    }

    /**
     * Get User
     *
     * @return \Drivrrr\ScanBundle\Entity\UserAcc
     */
    public function getUser()
    {
        return $this->User;
    }
}