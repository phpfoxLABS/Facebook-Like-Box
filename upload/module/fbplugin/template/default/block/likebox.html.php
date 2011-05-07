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

?>


{if isset($sPageURL)}
{literal}

<style type="text/css">
<!--


div.likeboxwrap {
width:{/literal}{$sPluginCSSWidth}{literal}px;
height:547px;
overflow:hidden;
}

div.likeboxwrap iframe {margin:-1px;}


-->
</style>
{/literal}
<div class="likeboxwrap">
<iframe src="http://www.facebook.com/plugins/likebox.php?href={$sPageURL}&amp;width={$sPluginWidth}&amp;border=no&amp;colorscheme={$sPluginScheme}&amp;show_faces=true&amp;stream=true&amp;header=false&amp;height=550" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:{$sPluginWidth}px; height:550px;  margin:-1px;" allowTransparency="true"></iframe>
</div>
{/if}