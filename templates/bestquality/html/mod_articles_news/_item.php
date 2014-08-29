<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$item_heading = $params->get('item_heading', 'h4');
$images  = json_decode($item->images);

?>
<div class="events-slide">
	<?php if ($params->get('item_title')) : ?>

		<<?php echo $item_heading; ?> class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
		<?php if ($params->get('link_titles') && $item->link != '') : ?>
			<a href="<?php echo $item->link;?>">
				<?php echo $item->title;?></a>
		<?php else : ?>
			<?php echo $item->title; ?>
		<?php endif; ?>
		</<?php echo $item_heading; ?>>

	<?php endif; ?>

	<!--image article-->
	<?php if (isset($images->image_intro) && !empty($images->image_intro)) : ?>
	<?php $imgfloat = (empty($images->float_fulltext)) ? $params->get('float_fulltext') : $images->float_fulltext; ?>
	<div class="pull-<?php echo htmlspecialchars($imgfloat); ?> item-image"> <img
	<?php if ($images->image_intro_caption):
		echo 'class="caption"'.' title="' .htmlspecialchars($images->image_intro_caption) . '"';
	endif; ?>
	src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" itemprop="image" class="image-border"/> </div>
	<?php endif; ?>


	<?php if (!$params->get('intro_only')) :
		echo $item->afterDisplayTitle;
	endif; ?>

	<?php echo $item->beforeDisplayContent; ?>

	<?php echo $item->introtext; ?>

	<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) :
		echo '<a class="readmore" href="'.$item->link.'" target="_blank">'.$item->linkText.'</a>';
	endif; ?>
</div>