<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>
<div id="primary">
    <h1><?php echo metadata('item', array('Dublin Core','Title')); ?></h1>

    <div id="item-images">
         <?php echo files_for_item(); ?>
    </div>

       <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

</div> <!-- End of Primary. -->

 <?php echo foot(); ?>
