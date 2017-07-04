<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 03/07/17
 * Time: 16:58
 */

namespace Miky\Component\User\Model\Traits;


use Miky\Component\User\Model\EmployeeInterface;
use Miky\Component\User\Model\UserInterface;

interface UserPersonInterface
{
    const TYPE_EMPLOYEE = "employee";

    const TYPE_USER = "user";

    const TYPE_SELF = "self";

    /**
     * @return mixed
     */
    public function getPerson();

    /**
     * @return string
     */
    public function getPersonType();

    /**
     * @param string $personType
     */
    public function setPersonType($personType);

    /**
     * @return EmployeeInterface
     */
    public function getEmployee();

    /**
     * @param EmployeeInterface $employee
     */
    public function setEmployee(EmployeeInterface $employee = null);

    /**
     * @return UserInterface
     */
    public function getUser();

    /**
     * @param UserInterface $user
     */
    public function setUser(UserInterface $user = null);

    /**
     * @return string
     */
    public function getFirstname();

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname);

    /**
     * @return string
     */
    public function getLastname();

    /**
     * @param string $lastname
     */
    public function setLastname($lastname);
}