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
use Isotope\Model\Shipping;


/**
 * Class ShippingFlat
 *
 * @copyright  Isotope eCommerce Workgroup 2009-2012
 * @author     Andreas Schempp <andreas.schempp@terminal42.ch>
 * @author     Fred Bliss <fred.bliss@intelligentspark.com>
 */
class Flat extends Shipping
{

    /**
     * Return calculated price for this shipping method
     * @return float
     */
    public function getPrice(IsotopeProductCollection $objCollection=null)
    {
        if (null === $objCollection) {
            $objCollection = Isotope::getCart();
        }

        if ($this->isPercentage()) {
            $fltPrice = $objCollection->subTotal / 100 * $this->getPercentage();
        } else {
            $fltPrice = (float) $this->arrData['price'];
        }
        
        // Calculate surcharge from a product if the surcharge field is set in module settings
        $intSurcharge = 0;
        
        if ($this->surcharge_field != '')
        {
            $arrProducts = Isotope::getCart()->getProducts();
    
            foreach ($arrProducts as $objProduct)
            {
                if ($this->flatCalculation == 'perItem')
                {
                    $intSurcharge += ($objProduct->quantity_requested * floatval($objProduct->{$this->surcharge_field}));
                }
                else
                {
                    $intSurcharge += floatval($objProduct->{$this->surcharge_field});
                }
            }
        }
        
        switch ($this->flatCalculation)
        {
            case 'perProduct':
                $fltPrice = (($fltPrice * $objCollection->products) + $intSurcharge);

            case 'perItem':
                $fltPrice = (($fltPrice * $objCollection->items) + $intSurcharge);

            default:
                $fltPrice = ($fltPrice + $intSurcharge);
        }
        
        return Isotope::calculatePrice($fltPrice, $this, 'price', $this->arrData['tax_class']);
    }
}
