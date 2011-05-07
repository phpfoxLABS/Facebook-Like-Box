<?php

 /**
 * 
 * @copyright		phpfoxLABS.com
 * @author  		Jacob Adams
 * @package  		Facebook Social Plugins
 * @version 		v1.0.0 - 2011-05-5
 * 
 *
 */


defined('PHPFOX') or exit('NO DICE!');


class Fbplugin_Component_Block_likebox extends Phpfox_Component
{
	
	public function process()
	{
		
		
		
		if (!Phpfox::getParam('fbplugin.facebook_page_url'))
		{
			return false;
	
	
		}
	
	

	
		$this->template()->assign(array(
										'sHeader' => Phpfox::getPhrase('fbplugin.like_box_title'),
										'sPageURL' => urlencode(Phpfox::getParam('fbplugin.facebook_page_url')),
										'sPluginBG' => Phpfox::getParam('fbplugin.plugin_bg_color'),
										'sPluginScheme' => Phpfox::getParam('fbplugin.color_scheme'),
										'sPluginWidth' => Phpfox::getParam('fbplugin.side_width'),
										'sPluginCSSWidth' => (Phpfox::getParam('fbplugin.side_width') - 3)
										));
	
		
		
			return 'block';	
 
 
 
	}
	
	
}


?>