<?php
queue_js_file('login');
$pageTitle = __('Log In');
echo head(array('bodyclass' => 'login', 'title' => $pageTitle), $header);
?>

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
                                                    {image : '<?php echo img("front.jpg"); ?>', title : 'Reading Letters', alt: 'Homepage picture'},

                                        ],

            // Theme Options               
            progress_bar            :   1,          // Timer for each slide                         
            mouse_scrub             :   0
                                                

                    
        });
    });         
</script>

</style>

<div class="block blur2 section-title">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="clear-form two-col">
                        <div class="form-heading">
                            <h3 class="header">Sign In to DIY History</h3>
                            <hr/>
                        </div>
                        <div class="col1">                            
                            <h4>Don't have an account?</h4>
                            <p>
                                Register for a free account. Track your transcriptions!
                            </p>
                            <a href="<?php echo WEB_ROOT ?>/guest-user/user/register" class="btn btn-large btn-block btn-fb">Sign Up</a>                            
                        </div>
                        <div class="col2">
                          <div class="form-heading">
                                <h4 class="header">Use your account</h4>                                                        
                            </div> 
                            <div class="form-body">
                                <form id="login-form" enctype="application/x-www-form-urlencoded" method="post" action="<?php echo WEB_ROOT ?>/users/login">
                                    <fieldset id="fieldset-login">
                                      <div class="field">
                                        
                                      <div class="pair-group">
                                          <input type="text" class="input-block-level" name="username" placeholder="Username">
                                        
                                        
                                       
                                          <input type="password" class="input-block-level" name="password" placeholder="Password">  
                                     
                                      </div>
                                      <div class="field"><div id="remember-label">
                                        <label for="remember" class="optional">Remember Me?</label>
                                      </div>
                                      <div>
                                      <input type="hidden" name="remember" value="0">
                                      <input type="checkbox" name="remember" id="remember" value="1" class="checkbox">
                                      </div>
                                  </fieldset> 
                          </div>                                 
                              <div class="form-footer">     
                                <input type="submit" name="submit" id="submit" class="btn btn-large btn-blue btn-block" value="Sign In">
                                <p>
                                  <a href="<?php echo WEB_ROOT ?>/users/forgot-password">Forgot your password?</a>
                                </p>
                              </div>  
                                
                                </form>
                            </div>
                        </div>          
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="slideshow"></div></div> 


<?php echo flash(); ?>


