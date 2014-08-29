<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  Templates.Puravida
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;



$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;


$itemid   = $app->input->getCmd('Itemid', '');

// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');

// Add Stylesheets
//$doc->addStyleSheet('templates/'.$this->template.'/css/normalize.min.css');

$doc->addStyleSheet('templates/'.$this->template.'/css/main.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/colorbox.css');


?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<jdoc:include type="head" />
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/modernizr-2.6.2.min.js"></script>

     
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
                    <jdoc:include type="modules" name="menu" style="none" />                  
            </nav>
        </header>
        
        <section class="content inner">
                <?php if ($this->countModules('content-left')) : ?>
                    <aside class="content-left">
                       <jdoc:include type="modules" name="content-left" style="xhtml" />
                    </aside>
                <?php endif; ?>
                <section class="content-main">
                     <jdoc:include type="message" />
                     <jdoc:include type="component" />
                     <?php if ($this->countModules('content-mainBottom')) : ?>
                        <aside class="content-mainBottom">
                           <jdoc:include type="modules" name="content-mainBottom" style="none" />
                        </aside>
                    <?php endif; ?>
                </section>
               <?php if ($this->countModules('content-right')) : ?>
                    <aside class="content-right">
                       <jdoc:include type="modules" name="content-right" style="xhtml" />
                    </aside>
                <?php endif; ?>
               
                <?php if ($this->countModules('content-bottom')) : ?>
                <section class="content-bottom">
                   <jdoc:include type="modules" name="content-bottom" style="none" />
                </section>
                <?php endif; ?>
               
            
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
