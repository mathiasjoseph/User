<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 03/07/17
 * Time: 16:57
 */

namespace Miky\Component\User\Model\Traits;

use Miky\Component\User\Model\EmployeeInterface;
use Miky\Component\User\Model\UserInterface;

trait UserPersonTrait
{
    /**
     * @var string
     */
    protected $personType;

    /**
     * @var string
     */
    protected $firstname;

    /**
     * @var string
     */
    protected $lastname;

    /**
     * @var EmployeeInterface
     */
    protected $employee;

    /**
     * @var UserInterface
     */
    protected $user;
    

    /**
     * @return mixed
     */
    public function getPerson(){
        $person = $this;
        switch ($this->personType) {
            case UserPersonInterface::TYPE_EMPLOYEE:
                $person = $this->getEmployee();
                break;
            case UserPersonInterface::TYPE_USER:
                $person = $this->getUser();
                break;
        }
        return $person;
    }

    /**
     * @param string $personType
     */
    public function setPersonType($personType)
    {
        $this->personType = $personType;
        switch ($this->personType) {
            case UserPersonInterface::TYPE_EMPLOYEE:
                $this->setUser();
                break;
            case UserPersonInterface::TYPE_USER:
                $this->setEmployee();
                break;
            default:
                $this->setEmployee();
                $this->setUser();
        }
    }

    /**
     * @return string
     */
    public function getPersonType()
    {
        return $this->personType;
    }


    /**
     * @return EmployeeInterface
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * @param EmployeeInterface $employee
     */
    public function setEmployee(EmployeeInterface $employee = null)
    {
        $this->employee = $employee;
    }

    /**
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param UserInterface $user
     */
    public function setUser(UserInterface $user = null)
    {
        $this->user = $user;
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

}