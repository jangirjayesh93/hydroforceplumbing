<?php
/**
 *  Template Name: Contact Page
 */
get_header(); 
if(function_exists('demo_custom_innner_banner')) demo_custom_innner_banner(); 
$address_label=get_field('address_label','option');
$email_label=get_field('email_address_label','option');
$phone_label=get_field('phone_number_label','option');
$follow_us_title=get_field('follow_us_title','option');

$address = get_field('demo_address', 'option');
$email= get_field('email_address', 'option');
$phone= get_field('demo_phone_number', 'option');
$map_iframe=get_field('demo_google_map_iframe','option');

$facebook=get_field('demo_facebook_url','option');
$linkedin=get_field('demo_linkedin_url','option');
$instagram=get_field('demo_instagram_url','option');

$contact_title=get_field('contact_title');
$contact_sub_title=get_field('contact_sub_title');
$contact_form_shortcode=get_field('contact_form_shortcode');
?>
 <!-- Contact Us section starts here-->
  <section id="inner-page" class="contact_page">
  	<div class="inner-page">
    	<div class="contact_icon_box_main">
      	<div class="container">
        	<!--<div class="main_title">How To Contact</div>-->
          <div class="row">
			<?php if($address) { ?>
          	<div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="about_icon_box">
                    <span class="about_icon"><span></span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36px" height="52px"><path d="M18,0.4c-9.925,0-18,8.075-18,18c0,3.354,0.929,6.626,2.687,9.465l14.288,23.025	c0.274,0.441,0.756,0.709,1.275,0.709c0.004,0,0.008,0,0.012,0c0.523-0.004,1.006-0.28,1.275-0.729l13.924-23.249	C35.122,24.843,36,21.654,36,18.4C36,8.475,27.925,0.4,18,0.4z M30.887,26.082l-12.66,21.137L5.237,26.285	C3.773,23.921,2.98,21.195,2.98,18.4C2.98,10.129,9.729,3.38,18,3.38s15.01,6.749,15.01,15.02	C33.01,21.112,32.269,23.769,30.887,26.082z"/><path d="M18,9.4c-4.962,0-9,4.038-9,9c0,4.931,3.972,9,9,9c5.09,0,9-4.124,9-9C27,13.438,22.962,9.4,18,9.4z M18,24.42	c-3.326,0-6.02-2.703-6.02-6.02c0-3.309,2.711-6.02,6.02-6.02s6.01,2.711,6.01,6.02C24.01,21.668,21.378,24.42,18,24.42z"/></svg></span>
					<?php if($address_label) { ?>
                    <span class="semibold"><?php echo $address_label; ?></span>
					<?php } ?>
                    <p><?php echo $address; ?></p>
                </div>
            </div>
			<?php } if($phone) { ?>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="about_icon_box">
                    <span class="about_icon call"><span></span><svg id="Layer_1" enable-background="new 0 0 512.021 512.021" height="512" viewBox="0 0 512.021 512.021" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m367.988 512.021c-16.528 0-32.916-2.922-48.941-8.744-70.598-25.646-136.128-67.416-189.508-120.795s-95.15-118.91-120.795-189.508c-8.241-22.688-10.673-46.108-7.226-69.612 3.229-22.016 11.757-43.389 24.663-61.809 12.963-18.501 30.245-33.889 49.977-44.5 21.042-11.315 44.009-17.053 68.265-17.053 7.544 0 14.064 5.271 15.645 12.647l25.114 117.199c1.137 5.307-.494 10.829-4.331 14.667l-42.913 42.912c40.482 80.486 106.17 146.174 186.656 186.656l42.912-42.913c3.838-3.837 9.361-5.466 14.667-4.331l117.199 25.114c7.377 1.581 12.647 8.101 12.647 15.645 0 24.256-5.738 47.224-17.054 68.266-10.611 19.732-25.999 37.014-44.5 49.977-18.419 12.906-39.792 21.434-61.809 24.663-6.899 1.013-13.797 1.518-20.668 1.519zm-236.349-479.321c-31.995 3.532-60.393 20.302-79.251 47.217-21.206 30.265-26.151 67.49-13.567 102.132 49.304 135.726 155.425 241.847 291.151 291.151 34.641 12.584 71.866 7.64 102.132-13.567 26.915-18.858 43.685-47.256 47.217-79.251l-95.341-20.43-44.816 44.816c-4.769 4.769-12.015 6.036-18.117 3.168-95.19-44.72-172.242-121.772-216.962-216.962-2.867-6.103-1.601-13.349 3.168-18.117l44.816-44.816z"/></g></svg></span>
					<?php if($phone_label) { ?>
                    <span class="semibold"><?php echo $phone_label; ?></span>
					<?php } ?>
                    <p>Talk to</p>
                    <a href="tel:<?php echo preg_replace('/\s/','',$phone); ?>" title="<?php echo $phone; ?>"><?php echo $phone; ?></a>
                </div>
            </div>
			<?php } if($email) { ?>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="about_icon_box">
                    <span class="about_icon"><span></span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="37px"><path d="M48.081,0.768H1.919c-0.98,0-1.775,0.794-1.775,1.773v31.917c0,0.979,0.795,1.773,1.775,1.773h46.161 c0.98,0,1.775-0.794,1.775-1.773V2.541C49.856,1.562,49.061,0.768,48.081,0.768z M45.168,3.314L25,18.809L4.831,3.314H45.168z M47.305,33.686H2.695V4.916l21.224,16.537c0.638,0.489,1.525,0.489,2.163,0L47.305,4.916V33.686z"/></svg></span>
					<?php if($email_label) { ?>
                    <span class="semibold"><?php echo $email_label; ?></span>
					<?php } ?>
                    <p>Send to</p>
                    <a href="mailto:<?php echo $email; ?>" title="<?php echo $email; ?>"><?php echo $email; ?></a>
                </div>
            </div>
			<?php }  if($facebook) { ?>
            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="about_icon_box cnt_social_icons">
                    <span class="about_icon"><span></span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="46px"><path d="M48.1,15.433h-6.534V8.9c0-0.829-0.671-1.5-1.5-1.5c-0.828,0-1.5,0.671-1.5,1.5v6.533h-6.533	c-0.828,0-1.5,0.672-1.5,1.5c0,0.829,0.672,1.5,1.5,1.5h6.533v6.534c0,0.828,0.672,1.5,1.5,1.5c0.829,0,1.5-0.672,1.5-1.5v-6.534	H48.1c0.828,0,1.5-0.671,1.5-1.5C49.6,16.105,48.928,15.433,48.1,15.433z"/><path d="M17.966,26.533C8.28,26.533,0.4,34.414,0.4,44.1c0,0.828,0.671,1.5,1.5,1.5h32.133c0.829,0,1.5-0.672,1.5-1.5	C35.533,34.414,27.653,26.533,17.966,26.533z M3.477,42.6c0.753-7.33,6.964-13.067,14.49-13.067c7.526,0,13.737,5.737,14.49,13.067	H3.477z"/><path d="M17.966,0.827c-5.256,0-9.533,4.277-9.533,9.533c0,5.257,4.276,9.533,9.533,9.533	c5.257,0,9.534-4.276,9.534-9.533C27.5,5.104,23.223,0.827,17.966,0.827z M17.966,16.893c-3.602,0-6.533-2.931-6.533-6.533	s2.931-6.533,6.533-6.533c3.603,0,6.534,2.931,6.534,6.533S21.569,16.893,17.966,16.893z"/></svg></span>
					<?php if($follow_us_title) { ?>
                    <span class="semibold"><?php echo $follow_us_title; ?></span>
					<?php } ?>
                    <?php  if($instagram || $instagram || $instagram) { ?>
                          <ul class="footer_social">
                           <?php if($facebook) { ?>
                        <li><a href="<?php echo $facebook; ?>"  target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <?php } if($linkedin) { ?>
                        <li><a href="<?php echo $linkedin; ?>" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li> 
                      <?php } if($instagram) { ?>
                        <li><a href="<?php echo $instagram; ?>" target="_blank" target="_blank"title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <?php   } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
			<?php } ?>
            
          </div>
        </div>
      </div>
	  <?php if($contact_form_shortcode) { ?>
      <div class="contact-form">
            <div class="container">
            <?php if($contact_title || $contact_sub_title) { ?>
            <div class="main_title">
            <?php if($contact_title) { ?>
            <span class="h2"><?php echo $contact_title; ?></span> 
            <?php } if($contact_sub_title) {?>
            <p><?php echo $contact_sub_title; ?></p>
        <?php } ?>
          </div>
      <?php } ?>
            <?php echo do_shortcode($contact_form_shortcode); ?>
          </div>
        </div>
	  <?php } ?>
      </div>
	  <?php if($map_iframe) { ?> 
      <div class="contact_map">
      <?php echo $map_iframe; ?>
    </div>
	  <?php } ?>
    </div>
  </section>
  <!-- Contact Us section ends here-->
<?php get_footer(); ?>
