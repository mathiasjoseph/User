<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 22/11/16
 * Time: 19:16
 */

namespace Miky\Component\User\Model;


use Miky\Component\Location\Model\LocationInterface;

interface UserInfoInterface
{
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

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $email
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getPhone();

    /**
     * @param string $phone
     */
    public function setPhone($phone);

    /**
     * @return string
     */
    public function getPhoneCode();

    /**
     * @param string $phoneCode
     */
    public function setPhoneCode($phoneCode);

    /**
     * @return LocationInterface
     */
    public function getLocation();

    /**
     * @param LocationInterface $location
     */
    public function setLocation($location);
}