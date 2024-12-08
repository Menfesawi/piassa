<?php
/**
 * Main Template File.
 * @package Piassa
 */

get_header();
            // spl_autoload_register(function($class){
            //     include 'classes/' . $class . '.php';
            // });
?>
<div class="content">
    <h2><?php echo 'Hello, World' ?></h2>
</div>

<?php
get_footer();