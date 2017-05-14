<?php
/**
 * List View Content Template
 * The content template for the list view. This template is also used for
 * the response that is returned on list view ajax requests.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/content.php
 * 
 * @package TribeEventsCalendar
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<div id="tribe-events-content" class="tribe-events-list">

  <h2 class="tribe-events-page-title"><font color="71013">Special Offers and Promotions!  </font>
  <a href="http://www.agileacademy.co/wp-content/uploads/2014/05/special_offers.png">
  <img class="alignnone wp-image-1822 size-full" src="http://www.agileacademy.co/wp-content/uploads/2014/05/special_offers.png" 
  width="150" height="102" /></a>
  </h2> 
     <!-- Promo 1 -->
<table style="width:100%"  cellpadding="20">
  <tr>
  <td valign="top" width="40%" style="padding-left:0px">
  <div>
    Get 50% off the Agile Contracting and Budgeting workshop when you register for
    both:
  <ul>
    <li><a href=
    "http://www.agileacademy.co/event/fundamentals-of-agile-software-development/"
    target="_blank">
    Fundamentals of Agile Software Development</a></li>

    <li><a href=
    "http://www.agileacademy.co/event/agile-project-management-workshop-october/" target=
    "_blank">
    Agile Contracting and Budgeting Workshop</a></li>
  </ul>

  <div style="font-size:10px">
    <hr style="margin:10px" />

    <ol>
      <li>Register for the Fundamentals of Agile Software Development Course on <a href=
      "https://www.eventbrite.com/e/fundamentals-of-agile-icagile-certified-professional-tickets-13001370449"
      target="_blank">Eventbrite</a></li>

      <li>Send an email to&nbsp;info@agileacademy.co with your registration details
      (first &amp; last name, and email) requesting this promotion</li>

      <li>You will receive a promo code that will apply a&nbsp;discount of 50% when you
      register for the Agile Contracting and Budgeting Workshop</li>
    </ol>
    <hr style="margin:10px" />
  </div>
  
  </td >
  <!-- Promo 2 -->
  <td valign="top">
  <div>
    Get 15% off any course or workshop for group registrations of 3
    persons!
    <div style="font-size:10px">
      <hr style="margin:10px" />

      <ol>
        <li>On the event page
        at&nbsp;Eventbrite, select the 'Group of 3' ticket</li>

        <li>Register and a discount of 15%
        will be applied</li>
      </ol>
      <hr style="margin:10px" />
    </div>
  </div>
  </td>
  <!-- Promo 3 -->
  <td valign="top" style="padding-right:0px;" width="37%">
  <div>
    <div>
Get up to 20% off if you
      register for more than one workshop!

      <ul>
        <li>10% off when you
        register&nbsp;for 2 workshops</li>

        <li>15% off when you register for
        3 workshops</li>

        <li>20% off when you
        register&nbsp;for 4 workshops</li>
      </ul>
      <span style="font-size:12px">Note: This offer does not apply to the
      Fundamentals of Agile Software Development training course</span>

      <div style="font-size:10px">
        <hr style="margin:10px" />

        <ol>
          <li>Send an email request
          to&nbsp;info@agileacademy.co with the workshops that you want to enroll in, and
          instruction of registration will be emailed back to you</li>
        </ol>
        <hr style="margin:10px" />
      </div>
    </div>
  </div>
  </td>
  </tr>
  </table>
    <!-- List Title -->
	<?php do_action( 'tribe_events_before_the_title' ); ?>
	<h2 class="tribe-events-page-title"><?php echo tribe_get_events_title() ?></h2>
	<?php do_action( 'tribe_events_after_the_title' ); ?>

	<!-- Notices -->
	<?php tribe_events_the_notices() ?>

	<!-- List Header -->
    <?php do_action( 'tribe_events_before_header' ); ?>
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>

		<!-- Header Navigation -->
		<?php do_action( 'tribe_events_before_header_nav' ); ?>
		<?php tribe_get_template_part('list/nav', 'header'); ?>
		<?php do_action( 'tribe_events_after_header_nav' ); ?>

	</div><!-- #tribe-events-header -->
	<?php do_action( 'tribe_events_after_header' ); ?>


	<!-- Events Loop -->
	<?php if ( have_posts() ) : ?>
		<?php do_action( 'tribe_events_before_loop' ); ?>
		<?php tribe_get_template_part( 'list/loop' ) ?>
		<?php do_action( 'tribe_events_after_loop' ); ?>
	<?php endif; ?>

	<!-- List Footer -->
	<?php do_action( 'tribe_events_before_footer' ); ?>
	<div id="tribe-events-footer">

		<!-- Footer Navigation -->
		<?php do_action( 'tribe_events_before_footer_nav' ); ?>
		<?php tribe_get_template_part( 'list/nav', 'footer' ); ?>
		<?php do_action( 'tribe_events_after_footer_nav' ); ?>

	</div><!-- #tribe-events-footer -->
	<?php do_action( 'tribe_events_after_footer' ) ?>

</div><!-- #tribe-events-content -->
