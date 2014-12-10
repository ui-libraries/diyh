<?php
$pageTitle = __('Search Omeka ') . __('(%s total)', $total_results);
echo head(array('title' => $pageTitle, 'bodyclass' => 'search'));
?>
<div id="primary">
<div class="content">
<h1> Search Results </h1>
<?php echo search_form(array('show_advanced' => true)); ?> 
<?php if ($total_results): ?>


<?php echo pagination_links(array()); ?>


<script>$("#searchbox").remove();</script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
               Omeka.dropDown();
    });
</script>
<table id="search-results" class="table table-striped">
    <thead>
        <tr>
            <th><?php //echo __('Record Type');?></th>
            <th><?php //echo __('Title');?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach (loop('search_texts') as $searchText): ?>
        <?php 
            $record = get_record_by_id($searchText['record_type'], $searchText['record_id']); 
            if (($searchText['record_type']) == 'File'){            
                set_current_record('file', $record);
                $file = get_current_record('file');
                $item_id = $record->item_id;     
                $item = get_record_by_id('item',$item_id); 
                $collection_id = $item->collection_id;
                $collection = get_record_by_id('collection',$collection_id);     
                $thumb = file_image('square_thumbnail');
            }
            elseif (($searchText['record_type']) == 'Item'){  
                set_current_record('item', $record);
                $item = get_current_record('item');
                $item_id = $item->id;
                $collection_id = $item->collection_id;
                $collection = get_record_by_id('collection',$collection_id);  
                $files = $item->getFiles();
                $firstFile = $files[0];
                set_current_record('file', $firstFile);
                $thumb = file_image('square_thumbnail');
            }
            elseif (($searchText['record_type']) == 'Collection'){ 
                set_current_record('collection', $record);
                $collection = get_current_record('collection');
                $collection_id = $collection->id;
                $items = get_records('Item', array('collection_id' => $collection_id));
                $firstItem = $items[0];
                $firstItemFiles = $firstItem->getFiles();
                $firstFile = $firstItemFiles[0];
                set_current_record('file', $firstFile);
                $thumb = file_image('square_thumbnail');
            }    

        ?>
        <tr>        
         
        

                <?php 
                //If item and file are set, the current search result is a file.  Display file, item metadata.
                if (isset($item) && isset($file)): ?>
                <td><a href="<?php echo WEB_ROOT . '/transcribe/' . $item_id . '/' . $file->id; ?>"><?php echo $thumb ?></a></td>
                <td>
                    <h2 class="smallHeader"><a href = "<?php echo WEB_ROOT . '/collections/show/' . $collection_id; ?>"><?php echo metadata($collection, array('Dublin Core', 'Title')); ?> </a></h2>
                    <h2 class="smallHeader"> <a href = "<?php echo WEB_ROOT . '/items/show/' . $item_id; ?>"><?php echo metadata($item, array('Dublin Core', 'Title')); ?></a></h2>
                    <h2><a href="<?php echo WEB_ROOT . '/transcribe/' . $item_id . '/' . $file->id; ?>"><?php echo metadata($file, array('Dublin Core', 'Title')); ?></a></h2> 
                <?php echo snippet(metadata($this->file, array('Scriptus', 'Transcription')),1, 350); ?></td>     
                <?php 
                //If only item is set, the current search result is an item.  Display item metadata.
                elseif (isset($item)): ?>
                    <td><a href = "<?php echo WEB_ROOT . '/items/show/' . $item_id; ?>"><?php echo $thumb ?></a></td>
                    <td><h2 class="smallHeader"><a href = "<?php echo WEB_ROOT . '/collections/show/' . $collection_id; ?>"><?php echo metadata($collection, array('Dublin Core', 'Title')); ?> </a></h2> 
                    <h2><a href = "<?php echo WEB_ROOT . '/items/show/' . $item_id; ?>"><?php echo metadata($item, array('Dublin Core', 'Title')); ?> </a></h2></td> 
                <?php
                //If only collection is set, the current search result is a collection.  Display collection metadata.
                elseif (isset($collection)): ?>
                     <td><a href = "<?php echo WEB_ROOT . '/collections/show/' . $collection_id; ?>"><?php echo $thumb ?></a></td>
                     <td><h2><a href = "<?php echo WEB_ROOT . '/collections/show/' . $collection_id; ?>"><?php echo metadata($collection, array('Dublin Core', 'Title')); ?> </a></h2></td>
                <?php endif; ?>

            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php echo pagination_links(array()); ?>

<?php else: ?>
<div id="no-results">
    <p><?php echo __('Your query returned no results.');?></p>
</div>
<?php endif; ?>
</div>
</div>
<?php echo foot(); ?>