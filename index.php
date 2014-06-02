<?php echo head(array('bodyid'=>'home', 'bodyclass' =>'two-col')); ?>

<script type="text/javascript">         
    jQuery(function($){             
        $.supersized({              
            // Functionality
            slideshow               :   1,          // Slideshow on/off
            autoplay                :   1,          // Slideshow starts playing automatically
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
                                                    {image : '<?php echo img("letters.jpg"); ?>', title : 'Reading Letters'},
                                                    {image : '<?php echo img("Eldist_Walls_and_sisters_in_front_of_house_1900s.jpg"); ?>', title : 'Eldist Walls and Sisters'},  
                                                    {image : '<?php echo img("Recto.jpg"); ?>', title : 'Antiphonal [leaf]'}
                                        ],
                                                
            // Theme Options               
            progress_bar            :   1,          // Timer for each slide                         
            mouse_scrub             :   0
                    
        });
    });         
</script>

<div id="controls-wrapper" class="load-item">

    <div id="controls">
    
        <a id="prevslide" class="load-item"></a>
        <a id="nextslide" class="load-item"></a>
        
        <div id="slidecounter">
            <span class="slidenumber"></span>  <span class="totalslides"></span>       
        </div><!--END SLIDECOUNTER-->
            
        <div id="slidecaption"></div><!--END SLIDECAPTION-->
        
    </div><!--END CONTROLS-->
        
    <ul id="slide-list"></ul>
    
</div><!--END CONTROLS-WRAPPER-->

<div id="slideshow">

    <?php /*if ($homepageText = get_theme_option('Homepage Text')): ?>
    <p><?php echo $homepageText; ?></p>
    <?php endif; ?>
	
	
    <?php 
        
        $collections = get_records('Collection', array(), 999);
        foreach ($collections as $collection) {
            set_current_record('Collection', $collection);

                echo '<h2>'.link_to_collection().'</h2>'; 
                echo "<br>";

                $items = get_records('Item', array('collection'=>$collection), 999);
                
                foreach ($items as $item) {
                      set_current_record('Item', $item);
		              echo link_to_item(item_image('square_thumbnail', array('alt' =>metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink'))));           
		              echo '<br>';
                }              
                
        }

     */ ?>

</div><!-- end primary -->

<?php //echo foot(); ?>
