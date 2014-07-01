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
    	<?php set_loop_records('files', get_current_record('item')->Files); ?>
    		<?php foreach (loop('files') as $file): ?>
                <?php $fileTitle = strip_formatting(metadata('file', array('Dublin Core', 'Title'))); ?>
                    <li class="not-started">
                        <div class="item">
                            <?php echo file_image('square_thumbnail', array('alt' => $fileTitle)); ?>
                            <div class="item-info">
                                <h3 class="title"><?php echo '<a href="https://s-lib018.lib.uiowa.edu/omeka/transcribe/'.$file->item_id.'/'.$file->id.'">' . $fileTitle . '</a>'; ?></h3>
                            </div><!--END ITEM-INFO-->  
                            <div class="item-info-overlay">
                                <div>                                    
                                    <p>Progress bar or maybe a little description</p>
                                    <?php echo "JEN, WHAT SHOULD THIS SAY HERE??"; ?>                                                       
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
