<?php
/**
 * @package Joomla
 * @subpackage mdlinkedinprofile
 * @copyright (C) 2011 Martijn Hiddink
 * @license GNU/GPL, 
 * mdlinkedinprofile is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License 3
 * as published by the Free Software Foundation.

 * mdlinkedinprofile is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

	// no direct access
	defined( '_JEXEC' ) or die( 'Restricted access' );
	$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
	require( JModuleHelper::getLayoutPath( 'mod_mdlinkedinprofile' ) );

?>