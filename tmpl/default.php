<?php
/**
 * @version     1.0
 * @package     mod_cf_pixabay
 * @copyright   Copyright (C) 2018. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Maarten Blokdijk / info@cloudfaction.nl / www.cloudfaction.nl
 */
//No Direct Access
defined('_JEXEC') or die;
?>
<script>var pixabayWidget = { 'key': '<?php echo $pixabay_apikey ?>', 
                             class_name: 'pixabay_widget',
                             img_type:'all', 
                             safesearch:'<?php echo $pixabay_safesearch ?>', 
                             order: '<?php echo $pixabay_order ?>',
                             max_rows: <?php echo $pixabay_rows ?>, 
                             row_height: <?php echo $pixabay_rowheight ?>,
                             navpos:'<?php echo $pixabay_navpos ?>', 
                             branding:'<?php echo $pixabay_branding ?>', 
                             per_page:<?php echo $pixabay_perpage ?>,
                             prev:'<?php echo $pixabay_prev ?>', 
                             next:'<?php echo $pixabay_next ?>' }</script>

<script src="https://cdn.rawgit.com/Pixabay/JavaScript-PixabayWidget/master/pixabay-widget.min.js" async defer></script>

<?php if($pixabay_searchtype == 1) : ?>
   <div class="pixabay_widget" data-target="_blank" data-user="<?php echo $pixabay_username ?>" ></div>
<?php endif; ?>

<?php if($pixabay_searchtype == 2) : ?>
<div class="pixabay_widget" data-target="_blank" data-search="<?php echo $pixabay_search ?>" ></div>
<?php endif; ?>