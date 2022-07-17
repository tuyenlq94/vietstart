<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vietstart
 */

get_header();
get_template_part('template-parts/products/banner');
get_template_part('template-parts/products/product-type');
get_template_part('template-parts/products/list-product');

get_template_part('template-parts/home/breadcrumbs');
get_template_part('template-parts/home/danh-gia');
get_template_part('template-parts/home/khac-biet');
get_template_part('template-parts/home/doi-tac');
get_footer();
