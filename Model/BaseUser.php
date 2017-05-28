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
}