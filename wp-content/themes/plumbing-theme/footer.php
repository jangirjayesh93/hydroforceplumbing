<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$footer_title_one=get_field('footer_title_one','option');
$footer_title_two=get_field('footer_title_two','option');
$footer_title_three=get_field('footer_title_three','option');
$footer_title_four=get_field('footer_title_four','option');
$footer_logo=get_field('demo_footer_logo','option');
$address_label=get_field('address_label','option');
$address=get_field('demo_address','option');
$email_label=get_field('email_address_label','option');
$email=get_field('email_address','option');
$phone_label=get_field('phone_number_label','option');
$phone=get_field('demo_phone_number','option');
$see_our_reviews_image=get_field('see_our_reviews_image','option');
$facebook=get_field('demo_facebook_url','option');
$footer_background_image=get_field('footer_background_image','option');
if(!is_page('contact')) {
$contact_form_section_background_image=get_field('contact_form_section_background_image','option');
$contact_form_main_title=get_field('contact_form_main_title','option');
$contact_form_sub_title=get_field('contact_form_sub_title','option');
$contact_form_shortcode=get_field('contact_form_shortcode','option');
if($contact_form_shortcode) { 
?>
<!-- Home form starts here-->
<section id="hl_form">
<div class="hl_form">
<div class="middle_banner_img" style="background:url(<?php if($contact_form_section_background_image) { echo $contact_form_section_background_image['url']; } else { echo get_template_directory_uri().'/assets/images/form_banner.jpg'; } ?>) center center;">
<div class="hl_form_main">
<div class="container">
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<div class="contact-form">
<?php if($contact_form_main_title) { ?>
<span class="h2"><?php echo $contact_form_main_title; ?></span>
<?php } if($contact_form_sub_title) { ?>
<p><?php echo $contact_form_sub_title; ?></p>
<?php } ?>
<?php echo do_shortcode($contact_form_shortcode); ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Home form ends here--> 
<?php  }  } ?>    
    <!--Contact Details starts here-->
<?php if($address || $email || $phone) { ?>
<section id="hl_contact_details">
      <div class="hl_contact_details">
        <div class="container">
            <div class="row">
                <?php if($address) { ?>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="cnt_icon_box"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="cnt_details">
                        <span class="h4">VISIT US</span>
                        <p><?php echo $address; ?></p>
                    </div>
                </div>
                <?php } if($phone) { ?>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="cnt_icon_box"><i class="fas fa-phone"></i></div>
                    <div class="cnt_details">
                        <span class="h4">CALL US</span>
                        <a href="tel:<?php echo preg_replace('/\s/','',$phone); ?>" title="<?php echo $phone; ?>"><?php echo $phone; ?></a>
                    </div>
                </div>
                <?php } if($email) { ?>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="cnt_icon_box"><i class="fas fa-envelope"></i></div>
                    <div class="cnt_details">
                        <span class="h4">SEND A MESSAGE</span>
                        <a href="mailto:<?php echo $email; ?>" title="<?php echo $email; ?>"><?php echo $email; ?></a>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
      </div>
</section>
<?php } ?>
    <!--footer ends here-->   
  
 
   
</div>
<!--footer starts here-->
<footer class="theme-footer">
  <div class="theme-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <div class="quick-links mobile-accordion">
                        <?php if($footer_title_one) { ?>
                        <div class="footer-title"><?php echo $footer_title_one; ?><span></span></div>
                        <?php } ?>
                        <div class="mobile-accordion-toggle">
                            <?php wp_nav_menu(array('menu' => 'Footer Menu','menu_class' => 'menu', 'container' => '','walker' => new My_Walker_Nav_Menu() ));  ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="quick-links mobile-accordion">
                        <?php if($footer_title_two) { ?>
                        <div class="footer-title"><?php echo $footer_title_two; ?><span></span></div>
                         <?php } ?>
                        <div class="mobile-accordion-toggle">
                            <?php wp_nav_menu(array('menu' => 'Residential Service','menu_class' => 'menu', 'container' => '','walker' => new My_Walker_Nav_Menu() ));  ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="quick-links mobile-accordion">
                        <?php if($footer_title_three) { ?>
                        <div class="footer-title"><?php echo $footer_title_three; ?><span></span></div>
                        <?php } ?>
                        <div class="mobile-accordion-toggle">
                            <?php wp_nav_menu(array('menu' => 'Commercial & Industrial','menu_class' => 'menu', 'container' => '','walker' => new My_Walker_Nav_Menu() ));  ?>
                        </div>
                    </div>
                </div> 
                <div class="col-12 col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="contact_details mobile-accordion">
                        <?php if($footer_title_four) { ?>
                        <div class="footer-title"><?php echo $footer_title_four; ?><span></span></div>
                        <?php } ?>
                        <div class="mobile-accordion-toggle">
                            <?php if($footer_logo) { ?>
                          <a href="<?php echo site_url(); ?>" title="<?php echo bloginfo('name'); ?>"><img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="footer_logo_01"></a>
                         <?php } if($address || $email || $phone) { ?>
                          <ul>
                            <?php if($address) { ?>
                            <li class="address_details">  
                              <i class="fas fa-map-marker-alt"></i><p><?php echo $address; ?></p>
                            </li>
                            <?php } if($phone) { ?>
                            <li class="address_details"> 
                              <i class="fas fa-phone"></i><a href="tel:<?php echo preg_replace('/\s/','',$phone); ?>" title="<?php echo $phone; ?>"><?php echo $phone; ?></a>
                            </li> 
                            <?php } if($email) { ?>
                            <li class="address_details"> 
                              <i class="fas fa-envelope"></i><a href="mailto:<?php echo $email; ?>" title="<?php echo $email; ?>"><?php echo $email; ?></a>
                            </li>
                        <?php } ?>
                          </ul>
                          <?php } if($instagram || $instagram || $instagram) { ?>
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
                </div>
                
                
            </div>
        </div>
    </div>
    <?php  $site_year = date("Y") .' '. get_bloginfo('name');  ?>
    <div class="theme-footer-bottom">
      <div class="container">
        <div class="copyright">
          <p>Copyright © <?php echo $site_year; ?></p>
        </div> 
      </div>
    </div>
</footer>



<?php wp_footer(); ?>
<?php demo_js_include(); ?>
<?php 
$demo_please_select_option_for_code_place=get_field('demo_please_select_option_for_code_place','option');
$demo_please_enter_google_analytics_code=get_field('demo_please_enter_google_analytics_code','option');
if($demo_please_select_option_for_code_place=="Footer") {
	echo $demo_please_enter_google_analytics_code; 
}
?>
</body>
</html>

<script>
   
/*Custom Validation*/
jQuery.validator.addMethod("phoneAu", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return this.optional(element) || phone_number.length > 5 &&
    phone_number.match(/^[- +()]*[0-9][- +()0-9]{5,16}$/);
}, "Please enter valid phone number.");


/*Footer Form*/

var footerform = jQuery(".wpcf7-form").validate({
        rules: {
        'your-name':{
        required:true
        },
        'your-email':{
        required: true,
        email:true
        },
		'your-service':{
        required:true
        },
        'your-phone':{
        required:true,
        phoneAu: true,
        rangelength : [5, 16]
        }
        
    },
    messages: {
        'your-name': {
        required: "Please enter your first name."
        },
        'your-email': {
        required: "Please enter your email.",
        email: "Please enter valid email address."
        },
		'your-service': {
        required: "Please select service."
        },
        'your-phone' : {
        required: "Please enter your phone.",
        rangelength : "Please enter valid phone number."
        }
    },
    errorPlacement: function(error, element)
    {
    error.insertAfter( element );
    },
    errorElement: "label",
    errorClass: "error"
});
jQuery('.wpcf7-form .submit_btn_box').find('.wpcf7-submit').on('click', function(event) {
if (footerform.form())
{           
}
else
{
    event.preventDefault();
    event.stopPropagation();
}
    
    jQuery('body').on('wpcf7mailsent', function(){ 
    setTimeout(function(){
    jQuery('.wpcf7-response-output').hide(1000);
    jQuery('.input-box').removeClass('filled');
    jQuery('.input-box').removeClass('focus');
    jQuery(".wpcf7-form").find("input[type=text]").first().focus();
    },5000);
    });    
});
</script>