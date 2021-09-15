<?php
/*************************************************************************************/
/* This file is part of the Thelia package.                                          */
/*                                                                                   */
/* Copyright (c) OpenStudio                                                          */
/* email : dev@thelia.net                                                            */
/* web : http://www.thelia.net                                                       */
/*                                                                                   */
/* For the full copyright and license information, please view the LICENSE.txt       */
/* file that was distributed with this source code.                                  */
/*************************************************************************************/

namespace SmartyPhoneDesktop\Smarty\Plugins;

use Thelia\Core\HttpKernel\Exception\RedirectException;
use TheliaSmarty\Template\AbstractSmartyPlugin;
use TheliaSmarty\Template\SmartyPluginDescriptor;

/**
 * Class SmartyPhoneDesktop
 * @package SmartyPhoneDesktop\Smarty\Plugins
 * @author Anthony Chevrier <anthony@meedle.fr>
 */
class PhoneDesktop extends AbstractSmartyPlugin
{

    public function __construct(){
    }

    /**
     * @param $params
     */
    public function phoneOrDesktop($params)
    {
		return $this->isMobile();
    }
	public function phone($params)
    {
		return $this->isMobile();
    }
	public function desktop($params)
    {
		return !$this->isMobile();
    }
	
	public function isMobile() {
		return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}

    /**
     * @return array of SmartyPluginDescriptor
     */
    public function getPluginDescriptors()
    {
        return array(
            new SmartyPluginDescriptor("function", "phoneDesktop", $this, "phoneOrDesktop"),
            new SmartyPluginDescriptor("function", "phone", $this, "phone"),
            new SmartyPluginDescriptor("function", "desktop", $this, "desktop"),
        );
    }
}
