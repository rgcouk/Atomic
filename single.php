<?php
/**
 * Single page template
 *
 * @package  WordPress
 * @subpackage  SageTimber
 * @since  SageTimber 0.1
 */

$context['dynamic_sidebar'] = Timber::get_widgets('single_footer');
$context = Timber::get_context();

Timber::render('pages/single.twig', $context);
