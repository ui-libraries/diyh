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
            <?php foreach (loop('items') as $item): ?>
                <?php $itemTitle = strip_formatting(metadata('item', array('Dublin Core', 'Title'))); ?>
                    <li class="not-started">
                        <div class="item">
                            <?php echo link_to_item(item_image('square_thumbnail', array('alt' => $itemTitle))); ?>
                            <div class="item-info">
                                <h3 class="title"><a href="#"><?php echo link_to_item($itemTitle); ?></a></h3>
                            </div><!--END ITEM-INFO-->  
                            <div class="item-info-overlay">
                                <div>                                    
                                    <p>Progress bar or maybe a little description</p>
                                    <?php echo link_to_item($itemTitle, array('class'=>'view')); ?>                                                       
                                </div>                  
                            </div><!--END ITEM-INFO-OVERLAY-->
                        </div><!--END ITEM-->                   
                    </li>                       
            <?php endforeach; ?>            
        <?php endif; ?>        
    </ul><!--END THUMBS-->
</div><!-- end PORTFOLIO-GRID -->

<?php fire_plugin_hook('public_collections_show', array('view' => $this, 'collection' => $collection)); ?>

</div><!--END CONTENT-->    
    
</div><!--END PRIMARY-->



