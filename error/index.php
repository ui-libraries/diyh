<?php
    $title = (isset($title) && $displayError)
           ? $title
           : __('Well this is embarrassing');
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo WEB_ROOT . '/themes/diyh/css/supersized.css'; ?>" />
    <link href="<?php echo WEB_ROOT . '/themes/diyh/css/bootstrap.min.css'; ?>" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="<?php echo WEB_ROOT . '/themes/diyh/css/error.css'; ?>" />

    <link href='//fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic|Cabin:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
</head>
    <script src="<?php echo WEB_ROOT . '/themes/diyh/javascripts/vendor/jquery-1.4.4.min.js'; ?>"></script>
    <script src="<?php echo WEB_ROOT . '/themes/diyh/javascripts/vendor/supersized.3.2.7.min.js'; ?>"></script>
<body id="debug">
    <script type="text/javascript">         
    jQuery(function($){             
        $.supersized({              
            // Functionality
            slideshow               :   0,          // Slideshow on/off
            autoplay                :   0,          // Slideshow starts playing automatically
            start_slide             :   1,          // Start slide (0 is random)
            stop_loop               :   0,          // Pauses slideshow on last slide
            random                  :   0,          // Randomize slide order (Ignores start slide)
            slide_interval          :   13000,       // Length between transitions
            transition              :   1,          // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed        :   1000,       // Speed of transition
            new_window              :   0,          // Image links open in new window/tab
            pause_hover             :   0,          // Pause slideshow on hover
            keyboard_nav            :   1,          // Keyboard navigation on/off
            performance             :   1,          // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
            image_protect           :   1,          // Disables image dragging and right click with Javascript
                                                               
            // Size & Position                         
            min_width               :   0,          // Min width allowed (in pixels)
            min_height              :   0,          // Min height allowed (in pixels)
            vertical_center         :   1,          // Vertically center background
            horizontal_center       :   1,          // Horizontally center background
            fit_always              :   0,          // Image will never exceed browser width or height (Ignores min. dimensions)
            fit_portrait            :   1,          // Portrait images will not exceed browser height
            fit_landscape           :   0,          // Landscape images will not exceed browser width
                                                               
            // Components                           
            slide_links             :   'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
            thumb_links             :   1,          // Individual thumb links for each slide
            thumbnail_navigation    :   0,          // Thumbnail navigation
            slides                  :   [           // Slideshow Images
                                                    {image : '<?php echo img("mess.jpg"); ?>', title : 'Reading Letters', alt: 'Homepage picture'},

                                        ],

            // Theme Options               
            progress_bar            :   1,          // Timer for each slide                         
            mouse_scrub             :   0
                                                

                    
        });
    });         
</script>
<div class="container">
  <div id="wrapper">
    <header class="clearfix">
      <div class="row">
        <div class="col-md-5 col-sm-5">
          <h3 class="brand"><a href="<?php echo WEB_ROOT; ?>"><img src="<?php echo img('logo.png'); ?>" alt="Back to DIYHistory homepage" /></a> </h3>
        </div>
        <div class="col-md-7 col-sm-7">          
        </div>
      </div><!--end-of-row--> 
    </header>      

    <article> 
      <!-- Tab panes -->
      <div class="tab-content-wrapper">
        <div class="tb-content active" id="home">
          <div class="box"> 
            <span class="section-icon"><i class="fa fa-chain-broken fa-2x"></i></span>
            <h1><?php echo $title; ?></h1>
            <h4><?php echo nl2br(htmlspecialchars($e->getMessage())); ?></h4>
            <p>The page you are looking for isn't here or maybe you don't have access.</p>
          </div>         
        </div>
    </article> 
  </div><!--end-of-wrapper--> 
</div><!--end-of-container--> 
        

<div id="slideshow"></div></div> 

</body>
</html>
