<?php
/**
 * Dhl Shipping
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to
 * newer versions in the future.
 *
 * PHP version 7
 *
 * @category  Dhl
 * @package   Dhl\Shipping\Webservice
 * @author    Christoph Aßmann <christoph.assmann@netresearch.de>
 * @copyright 2017 Netresearch GmbH & Co. KG
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.netresearch.de/
 */
namespace Dhl\Shipping\Api\Webservice;

use \Dhl\Shipping\Api\Data\Webservice\ResponseType;
use \Dhl\Shipping\Webservice\ResponseType\CreateShipmentResponseCollection;

/**
 * GatewayInterface
 *
 * @category Dhl
 * @package  Dhl\Shipping\Webservice
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
interface GatewayInterface
{
    /**
     * @param \Magento\Shipping\Model\Shipment\Request[] $shipmentRequests
     * @return CreateShipmentResponseCollection|ResponseType\CreateShipmentResponseInterface[]
     */
    public function createLabels(array $shipmentRequests);

    /**
     * @param string[] $shipmentNumbers
     * @return ResponseType\DeleteShipmentResponseInterface
     */
    public function cancelLabels(array $shipmentNumbers);
}
