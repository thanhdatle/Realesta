<?php
namespace Drivrrr\ScanBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\Role;
use Symfony\Component\Security\Core\User\UserInterface;
use FOS\UserBundle\Model\User as BaseUser;

/** 
 * @ORM\Entity
 */
class UserAcc extends BaseUser
{

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    protected $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     */
    protected $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="facebookId", type="string", length=255, nullable=true)
     */
    protected $facebookId;

    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** 
     * @ORM\Column(type="string", unique=true, length=255, nullable=false)
     */
    //protected $username;

    /** 
     * @ORM\Column(type="string", unique=false, length=255, nullable=false)
     */
    //protected $password;

    /** 
     * @ORM\Column(type="string", unique=false, length=255, nullable=false)
     */
    //protected $email;

    /** 
     * @ORM\OneToOne(targetEntity="Profile", mappedBy="User")
     */
    protected $Profile;
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->userServices = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function serialize()
    {
        return serialize(array($this->facebookId, parent::serialize()));
    }

    public function unserialize($data)
    {
        list($this->facebookId, $parentData) = unserialize($data);
        parent::unserialize($parentData);
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get the full name of the user (first + last name)
     * @return string
     */
    public function getFullName()
    {
        return $this->getFirstname() . ' ' . $this->getLastname();
    }

    /**
     * @param string $facebookId
     * @return void
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
        $this->setUsername($facebookId);
    }

    /**
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * @param Array
     */
    public function setFBData($fbdata)
    {
        if (isset($fbdata['id'])) {
            $this->setFacebookId($fbdata['id']);
            $this->addRole('ROLE_FACEBOOK');
        }
        if (isset($fbdata['first_name'])) {
            $this->setFirstname($fbdata['first_name']);
        }
        if (isset($fbdata['last_name'])) {
            $this->setLastname($fbdata['last_name']);
        }
        if (isset($fbdata['email'])) {
            $this->setEmail($fbdata['email']);
        }
    }

    
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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
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
     * Set Profile
     *
     * @param \Drivrrr\ScanBundle\Entity\Profile $profile
     * @return User
     */
    public function setProfile(\Drivrrr\ScanBundle\Entity\Profile $profile = null)
    {
        $this->Profile = $profile;
    
        return $this;
    }

    /**
     * Get Profile
     *
     * @return \Drivrrr\ScanBundle\Entity\Profile
     */
    public function getProfile()
    {
        return $this->Profile;
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return Role[] The user roles
     */
    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string The salt
     */
    public function getSalt()
    {
        return null;
    }



    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     *
     * @return void
     */
//    public function eraseCredentials()
//    {
//        // TODO: Implement eraseCredentials() method.
//    }
//
//    /**
//     * Checks whether the user's account has expired.
//     *
//     * Internally, if this method returns false, the authentication system
//     * will throw an AccountExpiredException and prevent login.
//     *
//     * @return Boolean true if the user's account is non expired, false otherwise
//     *
//     * @see AccountExpiredException
//     */
//    public function isAccountNonExpired()
//    {
//        // TODO: Implement isAccountNonExpired() method.
//
//    }
//
//    /**
//     * Checks whether the user is locked.
//     *
//     * Internally, if this method returns false, the authentication system
//     * will throw a LockedException and prevent login.
//     *
//     * @return Boolean true if the user is not locked, false otherwise
//     *
//     * @see LockedException
//     */
//    public function isAccountNonLocked()
//    {
//        // TODO: Implement isAccountNonLocked() method.
//    }
//
//    /**
//     * Checks whether the user's credentials (password) has expired.
//     *
//     * Internally, if this method returns false, the authentication system
//     * will throw a CredentialsExpiredException and prevent login.
//     *
//     * @return Boolean true if the user's credentials are non expired, false otherwise
//     *
//     * @see CredentialsExpiredException
//     */
//    public function isCredentialsNonExpired()
//    {
//        // TODO: Implement isCredentialsNonExpired() method.
//        return true;
//    }
//
//    /**
//     * Checks whether the user is enabled.
//     *
//     * Internally, if this method returns false, the authentication system
//     * will throw a DisabledException and prevent login.
//     *
//     * @return Boolean true if the user is enabled, false otherwise
//     *
//     * @see DisabledException
//     */
//    public function isEnabled()
//    {
//        // TODO: Implement isEnabled() method.
//        return true;
//    }
}