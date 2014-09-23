<?php
if ($this->pageCount > 1):
    $getParams = $_GET;
?>
<div class="pagination pagination-large">
<ul class="pagination">
    <?php if (isset($this->previous)): ?>
    <!-- Previous page link --> 
    <li class="pagination_previous">
        <?php $getParams['page'] = $previous; ?>
        <a href="<?php echo html_escape($this->url(array(), null, $getParams)); ?>"><?php echo __('Prev'); ?></a>
    </li>
    <?php endif; ?>   
    
    <li><a href="<?php echo WEB_ROOT . '/search?query='.$getParams['query'].'&page=1'; ?>">1</a></li>
    <li><a href="<?php echo WEB_ROOT . '/search?query='.$getParams['query'].'&page=2'; ?>">2</a></li>
    <li><a href="<?php echo WEB_ROOT . '/search?query='.$getParams['query'].'&page=3'; ?>">3</a></li>
    <li><a href="<?php echo WEB_ROOT . '/search?query='.$getParams['query'].'&page=4'; ?>">4</a></li>
    <li><a href="<?php echo WEB_ROOT . '/search?query='.$getParams['query'].'&page=5'; ?>">5</a></li>    
    
    <?php if (isset($this->next)): ?> 
    <!-- Next page link -->
    <li class="pagination_next">
        <?php $getParams['page'] = $next; ?>
        <a href="<?php echo html_escape($this->url(array(), null, $getParams)); ?>"><?php echo __('Next'); ?></a>
    </li>
    <?php endif; ?>
</ul>
</div>

<?php endif; ?>
