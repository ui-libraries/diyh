<?php
$collectionTitle = strip_formatting(metadata('collection', array('Dublin Core', 'Title')));
if ($collectionTitle == '') {
    $collectionTitle = __('[Untitled]');
}
?>

<?php echo head(array('title'=> $collectionTitle, 'bodyclass' => 'collections show')); ?>

<div id="primary">

<div class="content">

<div class="section-title">    
       
        <h1><?php echo $collectionTitle; ?></h1>      

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
        <?php if (metadata('collection', 'total_items') > 0): ?>
          <?php $totalFiles = 0; //Will hold number of files in collection
            $fileProgress = 0; //Will hold of files completed
            $total_needs_review = 0; //Will hold total percent of files that are under review
            $total_percent_completed = 0; //Will hold  percent of files that are completed
            $correctOrder = array( ); 
            $iter = 0;
          ?>
           <?php foreach (loop('items') as $item): ?>
              <?php
              //Establish correct order for items.  It is difficult to return them in sorted error given that their values are treated as strings instead of numbers by Omeka, so we are sorting them in the view.  
              $percentCompleted = metadata($item, array('Scriptus', 'Percent Completed'));
              $percentNeedsReview = metadata($item, array('Scriptus', 'Percent Needs Review'));
              //Compatibility with old versions (where needs review existed) requires this step
              $total = $percentCompleted + $percentNeedsReview;                 
              $correctOrder[$iter] = $total;  
              $iter++;  
              ?>
            <?php endforeach ?>
            <?php 
            //$correctOrder consists of keys that are the item's order in the $items array, and values that are progress.
            //We sort the array by progress, then use array_keys to get an array with key, value pairs of (original order, sorted order).  We can then set the current item as the next item in sorted order as we iterate through the items.  
            asort($correctOrder);
            $referenceOrder = array_keys($correctOrder);
            $iter = 0; ?>

            <?php foreach (loop('items') as $item): ?>

                <?php set_current_record('item', $items[$referenceOrder[$iter]]); ?>
                <?php $itemTitle = strip_formatting(metadata('item', array('Dublin Core', 'Title')));
              ?>
                    <li class="not-started">
                        <div class="item">
                            <?php echo link_to_item(item_image('square_thumbnail', array('alt' => $itemTitle))); ?>
                            <?php 
                                
                                $percentNeedsReview = metadata ('item', array('Scriptus', 'Percent Needs Review'));
                                $percentCompleted = metadata ('item', array('Scriptus', 'Percent Completed'));
                                $totalPercent = $percentNeedsReview + $percentCompleted;
                                if ($totalPercent > 100) $totalPercent = 100;
                            ?>
                            <div class="progress progress-danger item-progress">
                                <div class="bar" style="width: <?php echo $totalPercent;?>%;">
                                </div>
                            </div>
                            <div class="item-info">
                                <?php if ($totalPercent == 100): ?>
                                  <div class="itemProgress itemComplete"><strong>Needs Review</strong></div>
                                <?php else: ?>
                                 <div class="itemProgress"><strong><?php echo $totalPercent; ?>% started</strong></div>
                                <?php endif; ?>
                                 <h3 class="title"><?php echo link_to_item(snippet($itemTitle, 0, 100)); ?></h3>
                            </div><!--END ITEM-INFO-->  
                                             
                            
                        </div><!--END ITEM-->                   
                    </li>
                    <?php $files = $item->getFiles();
            
                      //Again, this is tracking total files
                      $totalFiles += count($files);
                      //We don't want to mess up the percentages if needs review or completed are zero
                      if ($percentNeedsReview != 0){    
                        $total_needs_review += round(count($files) * ($percentNeedsReview / 100));
                      }
                      if ($percentCompleted != 0){  
                        $total_percent_completed += round(count($files) * ($percentCompleted / 100));
                      }
                      if (($files != 0) && ($totalPercent != 0)){
                        $fileProgress += round(count($files) * ($totalPercent / 100)); 
                      }
                    ?>    
            <?php $iter++; ?>                                    
            <?php endforeach; ?> 
            <?php $total_percentage = $fileProgress / $totalFiles * 100;
                  $total_needs_review_percentage = round($total_needs_review / $totalFiles * 100);
                  $total_percent_completed = round($total_percent_completed / $totalFiles * 100); 
                  ?>           
        <?php endif; ?>        
    </ul><!--END THUMBS-->
</div><!-- end PORTFOLIO-GRID -->

<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>

<script>
        totalPercent = '<?php echo $total_percentage ;?>';
        totalPercentRounded = Math.round(totalPercent);
        fileProgress = '<?php echo $fileProgress ;?>';
        fileProgress = Math.round(fileProgress);
        totalFiles = '<?php echo $totalFiles ;?>';
        percentCompleted = <?php echo $total_percent_completed ;?>;
        percentNeedsReview = <?php echo $total_needs_review_percentage ;?>;
        
        
        /*Debugging */
        /*
        console.log("PERCENT IS");
        console.log(totalPercent);
        console.log("FILE PROGRESS IS");
        console.log(fileProgress);
        console.log("TOTAL FILES IS");
        console.log(totalFiles);
        console.log("PERCENT COMPLETED IS");
        console.log(percentCompleted);
        console.log("PERCENT NEEDS REVIEW");
        console.log(percentNeedsReview);*/
        
        progressBar = '<div id = "entire-collection" class="progress progress-danger"><div title="' + totalPercent + '% Completed" class="bar" style="width:' + totalPercent + '%;"></div></div>'; 
        statusText = '<div><p><strong>' + fileProgress + ' </strong>of<strong> ' + totalFiles + ' </strong>pages have been transcribed!</p></div>';

        jQuery( ".section-title" ).append( progressBar );
        jQuery( ".section-title" ).append( statusText );

</script>

<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>

</div><!--END CONTENT-->    
    
</div><!--END PRIMARY-->
</div>



