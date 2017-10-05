<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 23/11/16
 * Time: 15:22
 */

namespace Miky\Component\User\Model;

use Miky\Component\Media\Model\Media;
use JMS\Serializer\Annotation\ExclusionPolicy;
/**
 * Class User
 * @package Miky\Component\User\Model
 * @ExclusionPolicy("all")
 */
class User extends BaseUser implements UserInterface
{

    /**
     * @var Media
     */
    protected $profileImage;

    /**
     * @var string
     */
    protected $phone;



    /**
     * @var string
     */
    protected $website;


    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->enabled = true;
    }



    /**
     * @return Media
     */
    public function getProfileImage()
    {
        return $this->profileImage;
    }

    /**
     * @param Media $profileImage
     */
    public function setProfileImage($profileImage)
    {
        $this->profileImage = $profileImage;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }



}