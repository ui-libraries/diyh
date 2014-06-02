<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <!-- Stylesheets -->
    <?php
    queue_css_file('style');
    queue_css_file('blog');
    queue_css_file('socialize-bookmarks');
    queue_css_file('prettyPhoto');
    queue_css_file('supersized');

    echo head_css();
    ?>
    <!-- JavaScripts -->
    <?php queue_js_file('vendor/modernizr'); ?>
    <?php queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)')); ?>
    <?php queue_js_file('vendor/jquery.1.4.4'); ?>
    <?php queue_js_file('custom'); ?>
    <?php queue_js_file('twitter'); ?>
    <?php queue_js_file('vendor/bra.photostream'); ?>
    <?php queue_js_file('vendor/prettyPhoto'); ?>
    <?php queue_js_file('vendor/jquery.easing.min'); ?>
    <?php queue_js_file('vendor/supersized.3.2.7.min'); ?>
    <?php queue_js_file('vendor/supersized.shutter.min'); ?>
    <?php queue_js_file('vendor/filter-fade-portfolio'); ?>

    <?php queue_js_file('globals'); ?>
    <?php echo head_js(); ?>
    
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
   <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
       <header>
           <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>            
       </header>

<div id="wrapper">

    <!-- START HEADER -->

    <div id="header-wrapper">

        <div class="header">    
            
            <div id="logo"> 
                <a href=""><img src="<?php echo img('logo.png'); ?>" alt="" /></a>   
            </div><!--END LOGO-->
            
            <div id="primary-menu">
                    
                <ul class="menu">
                    <li><a href="/omeka">Home</a></li>
                    <li><a href="">Start Transcribing</a></li>
                    <li><a href="about">About</a></li>                   
                    <li><a href="#">Collections</a>       
                        <ul>
                            <li><a href="/omeka/collections/show/12">Pioneer Lives</a></li>
                            <li><a href="/omeka/collections/show/9">Iowa Women’s Lives: Letters and Diaries</a></li>
                            <li><a href="/omeka/collections/show/7">Szathmary Culinary Manuscripts and Cookbooks</a></li>
                            <li><a href="/omeka/collections/show/11">Building the Transcontinental Railroad</a></li>
                            <li><a href="/omeka/collections/show/6">Nile Kinnick Collection</a></li> 
                            <li><a href="/omeka/collections/show/8">Civil War Diaries and Letters</a></li>

                        </ul>       
                    </li>
                    <li><a href="contact.html">Contact</a></li>

                </ul><!--END UL MENU-->
                   
            </div><!--END PRIMARY MENU-->   
                            
            <ul class="social-bookmarks">
                <li><?php echo search_form(array('show_advanced' => false)); ?> </li>       
                <li class="twitter"><a href="https://twitter.com/DIY_History">twitter</a></li>
                <li class="rss"><a href="http://blog.lib.uiowa.edu/drp/">blog</a></li>
                <li class="flickr"><a href="https://www.flickr.com/photos/uiowa/">flickr</a></li>          
            </ul><!--END SOCIAL-BOOKMARKS-->
                     
            <div id="back-top">
                <a href="#">Back to Top</a> 
            </div><!--END BACK-TOP-->       
            
        </div><!--END HEADER--> 

    </div><!--END HEADER-WRAPPER-->

    <!-- END HEADER --> 