<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 20/04/17
 * Time: 00:08
 */

namespace Miky\Component\User\Model;


use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Core\Model\CommonModelTrait;

class BaseUser extends \FOS\UserBundle\Model\User implements CommonModelInterface
{
    Use CommonModelTrait;

    /**
     * @var string
     */
    protected $lastname;

    /**
     * @var string
     */
    protected $firstname;

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
}