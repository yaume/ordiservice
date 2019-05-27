<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.ordiservice
 *
 * @copyright   Copyright (C) 2005 - 2018 Ordi Service.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;


/*
 * Module chrome for rendering the module in a submenu
 */
function modChrome_no($module, &$params, &$attribs){
        if ($module->content)
	
        {
                echo $module->content;

        	}
}
function modChrome_menu_petit($module, &$params, &$attribs)
{
	if ($module->content)
	
        {       echo '<nav class="title-bar">';
                echo $module->content;
                echo  '</nav>';
        	}
   
}
function modChrome_menu_offcanvas($module, &$params, &$attribs)
{
        $moduleTag     = htmlspecialchars($params->get('module_tag', 'div'), ENT_QUOTES, 'UTF-8');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize !== 0 ? ' span' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'), ENT_QUOTES, 'UTF-8');
        $headerClass   = htmlspecialchars($params->get('header_class', 'page-header'), ENT_COMPAT, 'UTF-8');
        $moduleClassSfx   = htmlspecialchars($params->get('class_sfx', 'left'), ENT_COMPAT, 'UTF-8');
        $config = JFactory::getConfig();
        $siteName = $config->get( 'sitename' );

	if ($module->content)
	
        {      
                echo '<div class="title-bar-'.$moduleClassSfx.' hide-for-large">';
                echo '<button class="menu-icon" type="button" data-open="offCanvas">';
                echo '<div class="hamburger">';
                echo ' <span class="line"></span>';
                echo ' <span class="line"></span>';
                echo '<span class="line"></span>';
                echo '</div>';
                echo '</button>';
                echo $module->content;
                echo  '</div>';
        	}
   
}
function modChrome_menu($module, &$params, &$attribs)
{
        $moduleTag     = htmlspecialchars($params->get('module_tag', 'div'), ENT_QUOTES, 'UTF-8');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize !== 0 ? ' span' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'), ENT_QUOTES, 'UTF-8');
        $headerClass   = htmlspecialchars($params->get('header_class', 'page-header'), ENT_COMPAT, 'UTF-8');
        $moduleClassSfx   = htmlspecialchars($params->get('class_sfx', 'left'), ENT_COMPAT, 'UTF-8');

	if ($module->content)
	
        {      
                echo '<nav class="top-bar-'.$moduleClassSfx.' show-for-large">';
                echo $module->content;
                echo  '</nav>';
        	}
   
}
function modChrome_footer_menu($module, &$params, &$attribs)
{
        $moduleTag     = htmlspecialchars($params->get('module_tag', 'div'), ENT_QUOTES, 'UTF-8');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize !== 0 ? ' span' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'), ENT_QUOTES, 'UTF-8');
        $headerClass   = htmlspecialchars($params->get('header_class', 'page-header'), ENT_COMPAT, 'UTF-8');
        $moduleClassSfx   = htmlspecialchars($params->get('class_sfx', 'footer'), ENT_COMPAT, 'UTF-8');

	if ($module->content)
	
        {      
                echo '<nav class="'.$moduleClassSfx.'">';
                echo $module->content;
                echo  '</nav>';
        	}
   
}