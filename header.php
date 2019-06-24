<!DOCTYPE html>
<?php
/*
* Header template file for Voce Theme
*/
$char = get_bloginfo('charset');
$ping = get_bloginfo('pingback_url');
?>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php echo $char; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="profile" href="//gmpg.org/xfn/11">
    <link rel="pingback" href="<?php echo $ping; ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
