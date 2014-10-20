<?php
$itemTitle = strip_formatting(metadata('item', array('Dublin Core', 'Title')));
if ($itemTitle == '') {
    $itemTitle = __('[Untitled]');
}
?>

<?php echo head(array('title'=> $itemTitle, 'bodyclass' => 'items show')); ?>

<div id="primary">

<div class="content">

<div class="section-title">     

        <h1><?php echo $itemTitle; ?></h1>      

        <div class="filterable">
            <ul>
                <li class="active"><a href="#" data-filter="all"> All</a></li>
                <li><a href="#" data-filter="started">Started</a></li>
                <li><a href="#" data-filter="not-started">Not Started</a></li>
              </ul><!--END UL-->
        </div><!--END FILTERABLE--> 
    
    </div><!--END SECTION TITLE-->

<div class="portfolio-grid">
    <ul id="thumbs">     
    	<?php set_loop_records('files', get_current_record('item')->Files);             
            $uri = WEB_ROOT .'/transcribe/';?>
    		<?php foreach (loop('files') as $file): 
                
                    $status =  $file->getElementTexts('Scriptus', 'Status');

                    if ($status){
                        $status = $status[0];
                    }
                    else {
                        $status = 'Not Started';
                    }
                    
                    $fileTitle = strip_formatting(metadata('file', array('Dublin Core', 'Title'))); 

                        if ($status == 'Not Started') {
                            echo '<li class="not-started">';
                        } else {
                            echo '<li class="started">'; 
                        } ?> 
                                  
                        <div class="item">
                            <?php echo '<a href="' . $uri . $file->item_id . '/' . $file->id . '">' . file_image('square_thumbnail', array('alt' => $fileTitle)) .'</a>' ?>
                            <div class="item-info">
                               <?php $baseURL = Zend_Controller_Front::getInstance()->getRequest()->getBaseURL(); ?>
                                <h3 class="title"><?php echo '<a href="'. $baseURL . '/transcribe/' . $file->item_id.'/'.$file->id.'">' . $fileTitle . '</a>'; ?></h3>
                                <?php 
                                    if ($status == 'Not Started') {
                                        echo '<span class="label label-success">Not Started</span>';
                                    } else {
                                        echo '<span class="label label-important">Started</span>';
                                    } ?>
                                
                            </div><!--END ITEM-INFO-->  
                            <!-- <div class="item-info-overlay">
                                <div>                                    
                                    <p>Add info on other side?<p>                                                      
                                </div>                  
                            </div><!--END ITEM-INFO-OVERLAY-->
                        </div><!--END ITEM-->                   
                    </li>                       
            <?php endforeach; ?>       
    </ul><!--END THUMBS-->
</div><!-- end PORTFOLIO-GRID -->


       <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

</div><!--END CONTENT-->    
    
</div><!--END PRIMARY-->

 <?php echo foot(); ?>
