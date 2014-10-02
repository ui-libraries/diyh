<?php
$pageTitle = __('Search Omeka ') . __('(%s total)', $total_results);
echo head(array('title' => $pageTitle, 'bodyclass' => 'search'));
?>
<br /><br /><br /><h1> Search Results </h1>
<?php echo search_form(array('show_advanced' => true)); ?> 
<?php if ($total_results): ?>
<?php echo pagination_links(); ?>

<script>$("#searchbox").remove();</script>
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
            set_current_record('file', $record);
            $file = get_current_record('file');
            $item_id = $record->item_id;     
            $item = get_record_by_id('item',$item_id);       
            $thumb = file_image('square_thumbnail');

        ?>
        <tr>
            <td><?php echo $thumb ?></td>
            <td>
                <?php if ($item): ?>
                <h2><a href="<?php echo WEB_ROOT . '/transcribe/' . $item_id . '/' . $file->id .'"'; ?></a><?php echo metadata($file, array('Dublin Core', 'Title')); ?></h2> 
                <h4> 
                    <a href = "<?php echo WEB_ROOT . '/items/show/' . $item_id .'"'; ?>"><?php echo metadata($item, array('Dublin Core', 'Title')); ?> </a>                            
                     
                <?php endif; ?>
                </h4>
                    

                
                <?php echo snippet(metadata($this->file, array('Scriptus', 'Transcription')),1, 350); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo pagination_links(); ?>
<?php else: ?>
<div id="no-results">
    <p><?php echo __('Your query returned no results.');?></p>
</div>
<?php endif; ?>
<?php echo foot(); ?>