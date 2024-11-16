<?php
/**
 * Main Template File.
 * @package Piassa
 */

get_header();
?>
<div class="content">
    <h2><?php  echo 'The last version of CSS modification is:<br>'. filemtime(get_stylesheet_directory()) ?></h2>
    <h2 style="color:blueviolet">filemtime<span style="color: orange;">(<span style="color: blueviolet;">get_stylesheet_directory</span><span style="color: green;">()</span>)</span></h2>
</div>

<?php 
get_footer();