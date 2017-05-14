<?php
/**
 * The format for templates changed since version 0.17.
 * Since this code is included inside CatListDisplayer, $this refers to
 * the instance of CatListDisplayer that called this file.
 */

/* This is the string which will gather all the information.*/
$lcp_display_output = '';

//Add 'starting' tag. Here, I'm using an unordered list (ul) as an example:
$lcp_display_output .= '<div>';

/**
 * Posts loop.
 * The code here will be executed for every post in the category.
 * As you can see, the different options are being called from functions on the
 * $this variable which is a CatListDisplayer.
 *
 * The CatListDisplayer has a function for each field we want to show.
 * So you'll see get_excerpt, get_thumbnail, etc.
 * You can now pass an html tag as a parameter. This tag will sorround the info
 * you want to display. You can also assign a specific CSS class to each field.
 */
foreach ($this->catlist->get_categories_posts() as $single){
  $lcp_display_output .= '<a href="' . get_permalink($single->ID) . '" target="_blank">';
  $lcp_display_output .=  tribe_get_start_date($single->ID, true, 'M j, Y') . "</a><br>";
}

if ( ($this->catlist->get_posts_count() == 0) && ($this->params["no_posts_text"] != '') ) {
  $lcp_display_output .= $this->params["no_posts_text"];
}

$lcp_display_output .= '</div>';

$this->lcp_output = $lcp_display_output;