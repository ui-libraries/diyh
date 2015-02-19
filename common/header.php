<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <title><?php echo option('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?></title>


    <?php /*IMPORTANT: This line is necessary for GuestUserPlugin and any other plugins to look and work as they should on the front-end*/
    fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Stylesheets -->
    <?php
    
    queue_css_file('blog');
    queue_css_file('socialize-bookmarks');
    queue_css_file('supersized');
    queue_css_file('bootstrap.min');
    queue_css_file('style');
    queue_css_file('forms');

    echo head_css(); ?> 

    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:900italic' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet" type="text/css">
    
    <?php queue_js_file('vendor/modernizr'); ?>
    <?php queue_js_file('vendor/jquery-1.4.4.min'); ?>
    <?php queue_js_file('custom'); ?>
    <?php queue_js_file('vendor/jquery-1.11.1.min'); ?>
    <?php queue_js_file('vendor/bootstrap.min'); ?>
    <?php queue_js_file('vendor/supersized.3.2.7.min'); ?>
    <?php queue_js_file('vendor/filter-fade-portfolio'); ?>

    <?php echo head_js(); ?>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-783364-57', 'auto');
      ga('send', 'pageview');

    </script>

    
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
                <a href="<?php echo WEB_ROOT; ?>"><img src="<?php echo img('logo.png'); ?>" alt="Back to DIYHistory homepage" /></a>   
            </div><!--END LOGO-->
            <?php $requestURI = Zend_Controller_Front::getInstance()->getRequest()->getBasePath(); 
            if ($requestURI != '/' ){
                echo '<a id="tabskip" href="#primary">Skip down to content</a>'; 
            }
            ?>

            <nav id="primary-menu">
                    
                <ul class="menu">
                    <li id="collectionMenuItemContainer"><a id="collectionMenuItem" href="<?php echo WEB_ROOT;?>/collections/browse">Transcribe By Topic<span id="downArrowWrapper"><?php include ('themes/diyh/images/downArrow.svg') ?></span></a> 
                    <label for="collectionMenuItemContainer">Select a DIY collection</label>       
                        <ul>                            
                            <li><a href="<?php echo WEB_ROOT;?>/collections/show/12">Pioneer Lives</a></li>
                            <li><a href="<?php echo WEB_ROOT;?>/collections/show/13">World War II Diaries and Letters</a></li>
                            <li><a href="<?php echo WEB_ROOT;?>/collections/show/15">World War I Diaries and Letters</a></li>
                            <li><a href="<?php echo WEB_ROOT;?>/collections/show/9">Iowa Women’s Lives: Letters and Diaries</a></li>
                            <li><a href="<?php echo WEB_ROOT;?>/collections/show/7">Szathmary Culinary Manuscripts and Cookbooks</a></li>
                            <li><a href="<?php echo WEB_ROOT;?>/collections/show/11">Building the Transcontinental Railroad</a></li>
                            <li><a href="<?php echo WEB_ROOT;?>/collections/show/6">Nile Kinnick Collection</a></li> 
                            <li><a href="<?php echo WEB_ROOT;?>/collections/show/8">Civil War Diaries and Letters</a></li>

                        </ul>       
                    </li>
                    <?php if (!current_user()) {
                        echo '<li><a href="' . WEB_ROOT . '/guest-user/user/login">Login</a>';
                    }
                    else {
                        echo "<li><a href='" . WEB_ROOT . "/dashboard'>" . "<span id='newNotice'>New!</span>Dashboard</a></li><li><a href='" . WEB_ROOT . "/users/logout'>Logout</a></li>";
                    }
                    ?>
                    <li><a href="<?php echo WEB_ROOT;?>/about">About</a>
                        <ul>
                            <li><a href="<?php echo WEB_ROOT;?>/about">About The Project</a></li>
                            <li><a href="<?php echo WEB_ROOT;?>/contact">Contact</a></li>
                            <li><a href="<?php echo WEB_ROOT;?>/tips">Transcription Tips</a></li>
                        </ul>
                    </li>                   
  

                </ul><!--END UL MENU-->
                   
            </nav><!--END PRIMARY MENU-->   
                            
            <ul class="social-bookmarks">
                <li><div id="searchbox"><label for="query">Search DIY Collections here</label><?php echo search_form(array('show_advanced' => false)); ?></div></li>
                <li class="twitter"><a href="https://twitter.com/DIY_History">twitter</a></li>
                <li class="rss"><a href="http://blog.lib.uiowa.edu/drp/">blog</a></li>                         
            </ul><!--END SOCIAL-BOOKMARKS-->
                     
            <div id="back-top">
                <a href="#">Back to Top</a> 
            </div><!--END BACK-TOP-->       
            
        </div><!--END HEADER--> 

    </div><!--END HEADER-WRAPPER-->

   

    <!-- END HEADER --> 