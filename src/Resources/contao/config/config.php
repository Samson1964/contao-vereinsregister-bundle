<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   bdf
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2014
 */

$GLOBALS['BE_MOD']['dsb']['vereinsregister'] = array
(
	'tables'         => array
	(
		'tl_vereinsregister', 
		'tl_vereinsregister_chronik', 
		'tl_vereinsregister_chairman', 
		'tl_vereinsregister_namen', 
		'tl_vereinsregister_members', 
		'tl_vereinsregister_images'
	),
	'icon'           => 'bundles/contaovereinsregister/images/icon.png',
);
