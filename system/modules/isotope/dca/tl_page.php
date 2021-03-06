<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Isotope eCommerce Workgroup 2009-2012
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @author     Fred Bliss <fred.bliss@intelligentspark.com>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Extend tl_page palettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace(';{publish_legend}', ';{isotope_legend},iso_config;{publish_legend}', $GLOBALS['TL_DCA']['tl_page']['palettes']['root']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace(';{publish_legend}', ';{isotope_legend},iso_setReaderJumpTo;{publish_legend}', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);


/**
 * Add a selector to tl_page
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'iso_setReaderJumpTo';


/**
 * Add subpalettes to tl_page
 */
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['iso_setReaderJumpTo'] = 'iso_readerJumpTo';


/**
 * Add fields to tl_page
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['iso_config'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['iso_config'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'foreignKey'			  => 'tl_iso_config.name',
	'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_page']['fields']['iso_setReaderJumpTo'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['iso_setReaderJumpTo'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_page']['fields']['iso_readerJumpTo'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_page']['iso_readerJumpTo'],
	'exclude'                 => true,
	'inputType'               => 'pageTree',
	// @todo: only show the pages from this page root (a reader page in a different page tree than the current doesn't make sense) as soon as http://dev.contao.org/issues/3563 is implemented
	'eval'					  => array('fieldType'=>'radio', 'mandatory'=>true)
);


/**
 * Disable header edit button
 */
if ($_GET['table'] == 'tl_iso_product_categories')
{
	$GLOBALS['TL_DCA']['tl_page']['config']['notEditable'] = true;
}

