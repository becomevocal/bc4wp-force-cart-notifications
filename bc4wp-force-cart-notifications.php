<?php
/*
Plugin Name: BC4WP > Force BC Cart Notifications
Description: Force the cart menu item to show the notification badge when items are in the cart
Author: Nate Stewart
Version: 1.0
*/

function show_bc4wp_cart( ) {
    return true;
}
add_filter( 'bigcommerce/cart/menu/show_count', 'show_bc4wp_cart' );
