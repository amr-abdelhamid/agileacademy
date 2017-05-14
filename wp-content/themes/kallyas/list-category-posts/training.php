<?php
/**
 * The format for templates changed since version 0.17.
 * Since this code is included inside CatListDisplayer, $this refers to
 * the instance of CatListDisplayer that called this file.
 */

/* This is the string which will gather all the information.*/
$lcp_display_output = '';

// Show category link:
$lcp_display_output .= $this->get_category_link('strong');

//Add 'starting' tag. Here, I'm using an unordered list (ul) as an example:
$lcp_display_output .= '<div class="page-list page-list-ext">';

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
  //Start a List Item for each post:
  $lcp_display_output .= '<div class="page-list-ext-item">';

  //Post Thumbnail  
  $lcp_display_output .= '<div class="page-list-ext-image">';
  $lcp_display_output .= $this->get_thumbnail($single);
  $lcp_display_output .= '</div>';
  
  //Show the title and link to the post:
  $lcp_display_output .= '<h4>';
  $lcp_display_output .= $this->get_post_title($single);
  $lcp_display_output .= '</h4>';
  
  /**
   * Post content - Example of how to use tag and class parameters:
   * This will produce:<div class="lcp_excerpt">The content</div>
   */
  $lcp_display_output .= $this->get_excerpt($single, 'div', 'lcp_excerpt');

  //Close li tag
  $lcp_display_output .= '</div>';
  
  //Add a separator between pages
  $lcp_display_output .= '<div style="clear:both;"></div>';
  $lcp_display_output .= '<hr />';  
}

if ( ($this->catlist->get_posts_count() == 0) && ($this->params["no_posts_text"] != '') ) {
  $lcp_display_output .= $this->params["no_posts_text"];
}

$lcp_display_output .= '</div>';

// If there's a "more link", show it:
$lcp_display_output .= $this->catlist->get_morelink();

//Pagination
$lcp_display_output .= $this->get_pagination();

$this->lcp_output = $lcp_display_output;