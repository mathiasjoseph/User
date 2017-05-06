<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 22/11/16
 * Time: 19:12
 */

namespace Miky\Component\User\Model;


trait UserTypeTrait
{
    /**
     * @var Customer
     */
    protected $customer;

    /**
     * @var Employee
     */
    protected $employee;

    /**
     * @var Partner
     */
    protected $partner;

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }



    /**
     * @return Employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * @param Employee $employee
     */
    public function setEmployee($employee)
    {
        $this->employee = $employee;
    }

    /**
     * @return Partner
     */
    public function getPartner()
    {
        return $this->partner;
    }

    /**
     * @param Partner $partner
     */
    public function setPartner($partner)
    {
        $this->partner = $partner;
    }
}