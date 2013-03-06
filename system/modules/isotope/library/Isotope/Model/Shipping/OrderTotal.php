<?php

/**
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2009-2012 Isotope eCommerce Workgroup
 *
 * @package    Isotope
 * @link       http://www.isotopeecommerce.com
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 */

namespace Isotope\Model\Shipping;

use Isotope\Isotope;
use Isotope\Interfaces\IsotopeProductCollection;
use Isotope\Interfaces\IsotopeShipping;
use Isotope\Model\Shipping;
use Isotope\Factory\ProductCollectionSurcharge as SurchargeFactory;


/**
 * Class ShippingOrderTotal
 *
 * @copyright  Isotope eCommerce Workgroup 2009-2012
 * @author     Andreas Schempp <andreas.schempp@terminal42.ch>
 * @author     Fred Bliss <fred.bliss@intelligentspark.com>
 * @author     Christian de la Haye <service@delahaye.de>
 */
class OrderTotal extends Shipping implements IsotopeShipping
{

    protected $shipping_options = array();


    public function getPrice(IsotopeProductCollection $objCollection=null)
    {
        if (null === $objCollection) {
            $objCollection = Isotope::getCart();
        }
        
        $fltEligibleSubTotal = $this->getAdjustedSubTotal($objCollection);

        return $fltEligibleSubTotal <= 0 ? 0.00 : Isotope::calculatePrice($this->calculateShippingRate($this->id, $fltEligibleSubTotal), $this, 'price', $this->arrData['tax_class']);
    }


    public function calculateShippingRate($intPid, $fltCartSubTotal)
    {
        $objRates = \Database::getInstance()->prepare("SELECT * FROM tl_iso_shipping_options WHERE pid=? AND enabled='1'")->execute($intPid);

        if ($objRates->numRows < 1)
        {
            return 0;
        }

        $arrData = $objRates->fetchAllAssoc();

        //get the basic rate - calculate it based on group '0' first, which is the default, then any group NOT 0.
        foreach ($arrData as $row)
        {
            //determine value ranges
            if ((float) $row['minimum_total']>0 && $fltCartSubTotal>=(float) $row['minimum_total'])
            {
                if ($fltCartSubTotal<=(float) $row['maximum_total'] || $row['maximum_total']==0)
                {
                    $fltRate = $row['rate'];
                }
            }
            elseif ((float) $row['maximum_total']>0 && $fltCartSubTotal<=(float) $row['maximum_total'])
            {
                if ($fltCartSubTotal>=(float) $row['minimum_total'])
                {
                    $fltRate = $row['rate'];
                }
            }

        }

        return $fltRate;

    }

    /**
     * shipping exempt items should be subtracted from the subtotal
     * @param float
     * @return float
     */
    public function getAdjustedSubTotal(IsotopeProductCollection $objCollection)
    {
        $fltSubtotal = $objCollection->subTotal;
        $arrProducts = $objCollection->getProducts();

        foreach ($arrProducts as $objProduct)
        {
            if ($objProduct->shipping_exempt)
            {
                $fltSubtotal -= ($objProduct->price * $objProduct->quantity_requested);
            }
        }

        return $fltSubtotal;
    }


    /**
     * Initialize the module options DCA in backend
     *
     * @access public
     * @return string
     */
    public function moduleOptionsLoad()
    {
        $GLOBALS['TL_DCA']['tl_iso_shipping_options']['palettes']['default'] = '{general_legend},name,description;{config_legend},rate,minimum_total,maximum_total;{publishing_legend},enabled';
    }


    /**
     * List module options in backend
     *
     * @access public
     * @return string
     */
    public function moduleOptionsList($row)
    {
        return '
<div class="cte_type ' . $key . '"><strong>' . $row['name'] . '</strong></div>
<div class="limit_height' . (!$GLOBALS['TL_CONFIG']['doNotCollapse'] ? ' h52' : '') . ' block">
'. $GLOBALS['TL_LANG']['tl_iso_shipping_options']['option_type'][0] . ': ' . $GLOBALS['TL_LANG']['tl_iso_shipping_options']['types'][$row['option_type']] . '<br><br>' . $row['rate'] .' for '. $row['upper_limit'] . ' based on ' . $row['dest_country'] .', '. $row['dest_region'] . ', ' . $row['dest_zip'] . '</div>' . "\n";
    }


    /**
     * Get the checkout surcharge for this shipping method
     */
    public function getSurcharge($objCollection)
    {
        $fltEligibleSubTotal = $this->getAdjustedSubTotal($objCollection);

        if ($fltEligibleSubTotal <= 0)
        {
            return false;
        }

        return SurchargeFactory::buildShippingSurcharge($this, $objCollection);
    }
}
