<?php
/**
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU General Public License (GPL 3)
 * that is bundled with this package in the file LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Payone to newer
 * versions in the future. If you wish to customize Payone for your
 * needs please refer to http://www.payone.de for more information.
 *
 * @category        Payone
 * @package         Payone_Api
 * @subpackage      Request
 * @copyright       Copyright (c) 2020 <kontakt@fatchip.de> - www.fatchip.de
 * @author          FATCHIP GmbH <kontakt@fatchip.de>
 * @license         <http://www.gnu.org/licenses/> GNU General Public License (GPL 3)
 * @link            http://www.fatchip.de
 */

/**
 *
 * @category        Payone
 * @package         Payone_Api
 * @subpackage      Request
 * @copyright       Copyright (c) 2020 <fatchip.de> - www.fatchip.de
 * @license         <http://www.gnu.org/licenses/> GNU General Public License (GPL 3)
 * @link            http://www.fatchip.de
 */
class Payone_Api_Request_Parameter_Authorization_PaymentMethod_WalletWeChatPay
    extends Payone_Api_Request_Parameter_Authorization_PaymentMethod_Wallet
{
    /**
     * @var string
     */
    protected $businessrelation = NULL;

    /**
     * @return string
     */
    public function getBusinessrelation()
    {
        return $this->businessrelation;
    }

    /**
     * @param string $businessrelation
     */
    public function setBusinessrelation($businessrelation)
    {
        $this->businessrelation = $businessrelation;
    }

}
