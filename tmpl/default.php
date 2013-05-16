<?php
/**
 * @package Joomla
 * @subpackage mdlinkedinprofile
 * @copyright (C) 2011 Martijn Hiddink
 * @license GNU/GPL,  * mdlinkedinprofile is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License 3
 * as published by the Free Software Foundation.

 * mdlinkedinprofile is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */
	// no direct access
	defined('_JEXEC') or die('Restricted access');
	JFactory::getLanguage()->load('mod_mdlinkedinprofile');
	$langSite = substr($params->get('locale'), 0, 2);
	if ($langSite != '') {
		$langSite .= '/';
	}
	$param = $params->get('Buttontype', '0');
	$name = $params->get('name'); ?>
	<div class="mdlinkedinprofile <?php echo $moduleclass_sfx ?>"	
<?php if ($param=="0") {
	?>
<a href="<?php echo $params->get('profile'); ?>" target="_blank">
          <img src="http://www.linkedin.com/img/webpromo/btn_viewmy_160x33.png" width="160" height="33" border="0" alt="View <?php echo $name; ?>'s profile on LinkedIn">
    </a>
 <?php } 
 elseif 
  ($param=="1") {
	?>
<a href="<?php echo $params->get('profile'); ?>" target="_blank">
          <img src="http://www.linkedin.com/img/webpromo/btn_myprofile_160x33.png" width="160" height="33" border="0" alt="View <?php echo $name; ?>'s profile on LinkedIn">
    </a>
 <?php }
 elseif 
  ($param=="2") {
	?>
<a href="<?php echo $params->get('profile'); ?>" target="_blank">
          <img src="http://www.linkedin.com/img/webpromo/btn_viewmy_160x25.png" width="160" height="25" border="0" alt="View <?php echo $name; ?>'s profile on LinkedIn">
    </a>
 <?php }
 elseif 
  ($param=="3") {
	?>
<a href="<?php echo $params->get('profile'); ?>" target="_blank">
           <img src="http://www.linkedin.com/img/webpromo/btn_viewmy_120x33.png" width="120" height="33" border="0" alt="View <?php echo $name; ?>'s profile on LinkedIn">
    </a>
 <?php }
  elseif 
  ($param=="4") {
	?>
<a href="<?php echo $params->get('profile'); ?>" target="_blank">
           <img src="http://www.linkedin.com/img/webpromo/btn_profile_greytxt_80x15.png" width="80" height="15" border="0" alt="View <?php echo $name; ?>'s profile on LinkedIn">
    </a>
 <?php }
 elseif 
  ($param=="5") {
	?>
<a href="<?php echo $params->get('profile'); ?>" target="_blank">
           <img src="http://www.linkedin.com/img/webpromo/btn_profile_bluetxt_80x15.png" width="80" height="15" border="0" alt="View <?php echo $name; ?>'s profile on LinkedIn">
    </a>
 <?php }
 elseif 
  ($param=="6") {
	?>
<a href="<?php echo $params->get('profile'); ?>" target="_blank">
            <img src="http://www.linkedin.com/img/webpromo/btn_liprofile_blue_80x15.png" width="80" height="15" border="0" alt="View <?php echo $name; ?>'s profile on LinkedIn">
    </a>
 <?php }
  elseif 
  ($param=="7") {
	?>
<a href="<?php echo $params->get('profile'); ?>" target="_blank"style="text-decoration:none;"><span style="font: 80% Arial,sans-serif; color:#0783B6;"><img src="http://www.linkedin.com/img/webpromo/btn_in_20x15.png" width="20" height="15" alt="View <?php echo $name; ?>'s LinkedIn profile" style="vertical-align:middle" border="0">View <?php echo $name; ?>'s profile</span></a>
 <?php }
 elseif 
  ($param=="8") {
	?>
<a href="<?php echo $params->get('profile'); ?>" target="_blank"style="text-decoration:none;"><span style="font: 80% Arial,sans-serif; color:#0783B6;"><img src="http://www.linkedin.com/img/webpromo/btn_in_20x15.png" width="20" height="15" alt="View <?php echo $name; ?>'s LinkedIn profile" style="vertical-align:middle" border="0">View <?php echo $name; ?>'s profile</span></a>
 <?php } ?>
 </div>