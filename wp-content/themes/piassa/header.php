<?php

/**
 * Header Template
 * @package Piassa
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
    <header>Header</header>