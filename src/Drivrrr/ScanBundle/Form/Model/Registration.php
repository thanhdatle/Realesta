<?php
/**
 * Created by JetBrains PhpStorm.
 * User: MONKEY D.LUFFY
 * Date: 6/10/13
 * Time: 3:51 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Drivrrr\ScanBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use Drivrrr\ScanBundle\Entity\UserAcc as User;

class Registration
{
    /**
     * @Assert\Type(type="Drivrrr\ScanBundle\Entity\UserAcc")
     * @Assert\Valid()
     */
    protected $user;

    /**
     * @Assert\NotBlank()
     * @Assert\True()
     */
    protected $termsAccepted;

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }

    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (Boolean) $termsAccepted;
    }
}
