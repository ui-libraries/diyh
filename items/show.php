<?php
$itemTitle = strip_formatting(metadata('item', array('Dublin Core', 'Title')));
if ($itemTitle == '') {
    $itemTitle = __('[Untitled]');
}

$item = get_current_record('item');
$collection_id = $item->collection_id;
$collection = get_record_by_id('Collection', $collection_id);
$collectionTitleElement = $collection->getElementTexts('Dublin Core', 'Title');
$collectionTitle = $collectionTitleElement[0];
$title = $collectionTitle . ' | ' . $itemTitle;
?>

<?php echo head(array('title' => $title, 'bodyclass' => 'items show')); ?>

<?php echo $this->partial('common/redirect.php') ?>

<div id="primary">

<div class="content">

<div class="section-title">     

        <h1><?php echo $itemTitle; ?></h1>      

    
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
                            
                        </div><!--END ITEM-->                   
                    </li>                       
            <?php endforeach; ?>       
    </ul><!--END THUMBS-->
</div><!-- end PORTFOLIO-GRID -->


       <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

</div><!--END CONTENT-->    
    
</div><!--END PRIMARY-->

 <?php echo foot(); ?>
