<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
jimport( 'joomla.application.module.helper' );

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$renderer = $doc->loadRenderer('module');

$itemid   = $app->input->getCmd('Itemid', '');

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
	<meta charset="utf-8">
    <title><?php echo $this->title; ?> <?php echo $this->error->getMessage();?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/main.css" type="text/css" />

</head>
<body class="<?php echo ($itemid ? ' bgid-' . $itemid : '')?>">
       
        <header class="header">
            <div class="inner">
                
                <a href="<?php echo $this->baseurl ?>" class="header-logo"><img class="header-logoImg" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo.jpg" alt="Best Quality" /></a>
                <span class="header-logoCertificacion"><img class="header-logoCertificacionImg" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/mundo.jpg" alt="Certificacion Internacional"></span>
                <div class="header-languajes">
                    <a href="<?php echo $this->baseurl ?>/es" class="header-languajesLink "><img class="header-languajesImg" src="<?php echo $this->baseurl ?>/media/mod_languages/images/es_es.gif" alt="Español" />Español</a>
                    <a href="#" class="header-languajesLink"><img class="header-languajesImg" src="<?php echo $this->baseurl ?>/media/mod_languages/images/en_us.gif" alt="Ingles" />Ingles</a>
                </div>
                

            </div>
            <nav class="menu inner">
                    <?php if (JModuleHelper::getModule('menu')) : ?>
                        <?php
                                        $mt = JModuleHelper::getModule('menu');
                                        echo JModuleHelper::renderModule($mt);
                                    ?>
                        <?php endif; ?>      
            </nav>
        </header>
        
        <section class="content inner">
               
                    <aside class="content-left">
                       <jdoc:include type="modules" name="content-left" style="xhtml" />
                    </aside>
              
                <section class="content-main">
                     <div class="text404">
                        <h1 class="page-header"><?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?></h1>
                            <div class="well">
                            <div class="row-fluid">
                                <div class="span6">
                                    <p><strong><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></strong></p>
                                    <p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
                                    <ul>
                                        <li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
                                        <li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
                                        <li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
                                        <li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
                                    </ul>
                                </div>
                                <div class="span6">
                                    <?php if (JModuleHelper::getModule('search')) : ?>
                                        <p><strong><?php echo JText::_('JERROR_LAYOUT_SEARCH'); ?></strong></p>
                                        <p><?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?></p>
                                        <?php
                                            $module = JModuleHelper::getModule('search');
                                            echo JModuleHelper::renderModule($module);
                                        ?>
                                    <?php endif; ?>
                                    <p><?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?></p>
                                    <p><a href="<?php echo $this->baseurl; ?>/index.php" class="btn btn-red"><i class="icon-home"></i> <?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></p>
                                </div>
                            </div>
                            <hr />
                            <p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
                            <blockquote>
                                <span class="label label-inverse"><?php echo $this->error->getCode(); ?></span> <?php echo $this->error->getMessage();?>
                            </blockquote>
                        </div>

                </div>
                    
                        <aside class="content-mainBottom">
                           <jdoc:include type="modules" name="content-mainBottom" style="none" />
                        </aside>
                   
                </section>
              
                    <aside class="content-right">
                       <jdoc:include type="modules" name="content-right" style="xhtml" />
                    </aside>
               
               
               
                <section class="content-bottom">
                   <jdoc:include type="modules" name="content-bottom" style="none" />
                </section>
              
               
            
        </section>
        <footer class="footer">
            
            <div class="inner">
                <span class="footer-copyright">Copyright © 2013 Bestquality.com <br />All Rights Reserved.</span>
               
            </div>
        </footer>
  
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.colorbox-min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.cycle2.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.cycle2.carousel.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.hoverIntent.minified.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/holder.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
           /* (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');*/
        </script>
        <jdoc:include type="modules" name="debug" style="none" />
    </body>

</html>
