<?php
$pageTitle = __('Browse Collections');
echo head(array('title'=>$pageTitle,'bodyclass' => 'collections browse'));
?>
<link href="http://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet" type="text/css">
<style>
.slider img {
    height: 100px;
    width: 100px;
}

.slider li {
    width: 125px;
}

.collectionContainer {
    padding: 5px;
    margin-bottom: 25px;
}

.section-title h1 {
    font-family: 'Vollkorn';
    font-size: 30pt;
}

@media (max-width: 480px) {
  .section-title h1 {
    font-size: 28pt;
  }
  }

</style>

<script type="text/javascript" src="http://diyhistory.ecn.uiowa.edu/transcribe/application/views/scripts/javascripts/jquery.bxSlider.min.js"></script>

<div class="content">
<div class="section-title"><h1><?php echo $pageTitle; ?></h1></div>
<?php $collectionCount = 0 ?>
<?php foreach (loop('collections') as $collection): ?>

    <div class="collectionContainer">
        <?php 
        $title = metadata('collection', array('Dublin Core', 'Title')); 
        ?>
                    
        <h2><?php echo $title ?></h2>
         <strong>(<?php echo link_to_collection('Browse all') ?>)</strong>

        <?php $items = get_records('Item', array('collection' => $collection->id), 9000); 
        set_loop_records('Item', $items);
        ?>

        <ul class="collection<?php echo $collectionCount ?> slider">

        <?php foreach (loop('items') as $item): ?>

              <?php set_current_record('item', $item); 
              $title = metadata('item', array('Dublin Core', 'Title')); ?>
            
              <li ><?php echo link_to_item(item_image('square_thumbnail'), array('data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => $title)); ?></li>

        
        <?php endforeach ?>
        <?php $collectionCount++; ?>
        </ul>
    </div>

<?php endforeach ?>
<?php echo pagination_links(); ?>

<script>
$(document).ready(function(){
    noOfCollections = <?php echo count(get_records('Collection')); ?>;
    for (i = 0; i < noOfCollections; i++){
        //How collection is referred to in the DOM
        collectionHandle = '.collection' + i;

       $(collectionHandle).bxSlider({
        displaySlideQty: 7,
        moveSlideQty: 7
       });
    }
    $('[data-toggle="tooltip"]').tooltip({delay: {show: 450, hide: 450}})

});

</script>

<?php fire_plugin_hook('public_collections_browse', array('collections'=>$collections, 'view' => $this)); ?>

<?php echo foot(); ?>
</div><!-- end content -->
