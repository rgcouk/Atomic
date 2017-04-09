<?php
/**
 * Template Name : Homepage
 *
 * @package  WordPress
 * @subpackage  SageTimber
 * @since  SageTimber 0.1
 */

$context = Timber::get_context();
Timber::render('pages/home.twig', $context);
