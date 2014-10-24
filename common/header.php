<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <title>DIY History</title>


    <?php /*IMPORTANT: This line is necessary for GuestUserPlugin and any other plugins to look and work as they should on the front-end*/
    fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Stylesheets -->
    <?php
    
    queue_css_file('blog');
    queue_css_file('socialize-bookmarks');
    queue_css_file('supersized');
    queue_css_file('bootstrap.min');
    queue_css_file('style');

    echo head_css(); ?> 

    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:900italic' rel='stylesheet' type='text/css'>
    
    <?php queue_js_file('vendor/modernizr'); ?>
    <?php queue_js_file('vendor/jquery-1.4.4.min'); ?>
    <?php queue_js_file('custom'); ?>
    <?php queue_js_file('vendor/jquery-1.11.1.min'); ?>
    <?php queue_js_file('vendor/bootstrap.min'); ?>
    <?php queue_js_file('vendor/supersized.3.2.7.min'); ?>
    <?php queue_js_file('vendor/filter-fade-portfolio'); ?>

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
                <a href="<?php echo WEB_ROOT; ?>"><img src="<?php echo img('logo.png'); ?>" alt="" /></a>   
            </div><!--END LOGO-->
            
            <div id="primary-menu">
                    
                <ul class="menu">
              
                    <li><a href="<?php echo WEB_ROOT;?>/about">About</a></li>                   
                    <li><a href="#">Collections</a>       
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
                    <li><a href="<?php echo WEB_ROOT;?>/contact">Contact</a></li>
                    <?php if (!current_user()) {
                        echo '<li><a href="' . WEB_ROOT . '/guest-user/user/login">Login</a>';
                    }
                    else {
                        $output = "<li><a href='" . WEB_ROOT . "/recent-comments'>" . current_user()->username . "'s dashboard</a></li><li><a href='" . WEB_ROOT . "/users/logout'>Logout</a></li>";
                        echo $output; 
                    }
                    ?>

                </ul><!--END UL MENU-->
                   
            </div><!--END PRIMARY MENU-->   
                            
            <ul class="social-bookmarks">
                <li><div id="searchbox"><?php echo search_form(array('show_advanced' => false)); ?></div></li>       
                <li class="twitter"><a href="https://twitter.com/DIY_History">twitter</a></li>
                <li class="rss"><a href="http://blog.lib.uiowa.edu/drp/">blog</a></li>                         
            </ul><!--END SOCIAL-BOOKMARKS-->
                     
            <div id="back-top">
                <a href="#">Back to Top</a> 
            </div><!--END BACK-TOP-->       
            
        </div><!--END HEADER--> 

    </div><!--END HEADER-WRAPPER-->

   

    <!-- END HEADER --> 