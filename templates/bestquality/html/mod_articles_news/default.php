<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="newsflash<?php echo $moduleclass_sfx; ?> cycle-slideshow" data-cycle-slides=".events-slide" data-cycle-timeout="6000" >
<?php
foreach ($list as $item) : 
	require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); 
 endforeach;
?>
</div>
