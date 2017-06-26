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
    const GENDER_FEMALE = "f";

    const GENDER_MALE = "m";

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
     * @var \DateTime
     */
    protected $dateOfBirth;

    /**
     * @var string
     */
    protected $gender;

    /**
     * @var string
     */
    protected $type;



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

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param \DateTime $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}