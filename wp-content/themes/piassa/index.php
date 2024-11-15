<?php
/**
 * Main Template File.
 * @package Piassa
 */

get_header();
?>
<div class="content">
    <h2><?php  echo filemtime(get_template_directory().'/style.css'); ?></h2>
</div>

<?php 
get_footer();