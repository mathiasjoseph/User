<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 23/11/16
 * Time: 15:22
 */

namespace Miky\Component\User\Model;

use Miky\Component\Media\Model\Media;


class User extends BaseUser
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
    protected $cellPhone;

    /**
     * @var string
     */
    protected $facebookId;

    /**
     * @var string
     */
    protected $googleId;

    /**
     * @var string
     */
    protected $twitterId;

    /**
     * @var string
     */
    protected $facebookUrl;

    /**
     * @var string
     */
    protected $googleUrl;

    /**
     * @var string
     */
    protected $twitterUrl;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->enabled = true;
    }


    /**
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * @param string $facebookId
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
    }

    /**
     * @return string
     */
    public function getGoogleId()
    {
        return $this->googleId;
    }

    /**
     * @param string $googleId
     */
    public function setGoogleId($googleId)
    {
        $this->googleId = $googleId;
    }

    /**
     * @return string
     */
    public function getTwitterId()
    {
        return $this->twitterId;
    }

    /**
     * @param string $twitterId
     */
    public function setTwitterId($twitterId)
    {
        $this->twitterId = $twitterId;
    }

    /**
     * @return string
     */
    public function getFacebookUrl()
    {
        return $this->facebookUrl;
    }

    /**
     * @param string $facebookUrl
     */
    public function setFacebookUrl($facebookUrl)
    {
        $this->facebookUrl = $facebookUrl;
    }

    /**
     * @return string
     */
    public function getGoogleUrl()
    {
        return $this->googleUrl;
    }

    /**
     * @param string $googleUrl
     */
    public function setGoogleUrl($googleUrl)
    {
        $this->googleUrl = $googleUrl;
    }

    /**
     * @return string
     */
    public function getTwitterUrl()
    {
        return $this->twitterUrl;
    }

    /**
     * @param string $twitterUrl
     */
    public function setTwitterUrl($twitterUrl)
    {
        $this->twitterUrl = $twitterUrl;
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
    public function getCellPhone()
    {
        return $this->cellPhone;
    }

    /**
     * @param string $cellPhone
     */
    public function setCellPhone($cellPhone)
    {
        $this->cellPhone = $cellPhone;
    }


}