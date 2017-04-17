<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 22/11/16
 * Time: 19:16
 */

namespace Miky\Component\User\Model;


interface UserTypeInterface
{
    /**
     * @return Customer
     */
    public function getCustomer();

    /**
     * @param Customer $customer
     */
    public function setCustomer($customer);

    /**
     * @return Administrator
     */
    public function getAdministator();

    /**
     * @param Administrator $administator
     */
    public function setAdministator($administator);

    /**
     * @return Employee
     */
    public function getEmployee();

    /**
     * @param Employee $employee
     */
    public function setEmployee($employee);

    /**
     * @return Partner
     */
    public function getPartner();

    /**
     * @param Partner $partner
     */
    public function setPartner($partner);
}