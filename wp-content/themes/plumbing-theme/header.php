<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="format-detection" content="telephone=no">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php 
$favicon=get_field('demo_favicon_icon','option'); 
?>
<link rel="shortcut icon" href="<?php if($favicon) { echo $favicon; } else { echo get_template_directory_uri().'/assets/images/favicon.png'; } ?>" type="image/x-icon">
<?php echo demo_css_include(); ?>
<?php wp_head(); ?>

<?php 
$demo_please_select_option_for_code_place=get_field('demo_please_select_option_for_code_place','option');
$demo_please_enter_google_analytics_code=get_field('demo_please_enter_google_analytics_code','option');
if($demo_please_select_option_for_code_place=="Header") {
	echo $demo_please_enter_google_analytics_code; 
}
?>
</head>
<body <?php body_class(); ?>> 
  <div class="site-main"> 
  <!--header section starts-->
 <header>
    <div class="header">
      <div class="top_header">
        <div class="container">
          <div class="left_top_header">
            <?php  
            $phone=get_field('demo_phone_number','option'); 
            $email=get_field('email_address','option'); 
            if($phone || $email) {
            ?>
              <div class="header_call">
                <?php if($phone) { ?>
                  <a href="tel:<?php echo preg_replace('/\s/','',$phone); ?>" title="<?php echo $phone; ?>"><i class="phone_icon"></i> <span><?php echo $phone; ?></span></a>
                <?php } if($email) { ?>
                  <a href="mailto:<?php echo $email; ?>" title="<?php echo $email; ?>"><i class="mail_icon"></i> <span><?php echo $email; ?></span></a> 
                <?php   } ?>
                </div> 
            </div>
          <?php } ?>
            <?php 
            $header_button_text=get_field('header_button_text','option');
            $header_button_url=get_field('header_button_url','option');
            $facebook=get_field('demo_facebook_url','option');
            $linkedin=get_field('demo_linkedin_url','option');
            $instagram=get_field('demo_instagram_url','option');
            if(($header_button_text && $header_button_url) || ($facebook || $linkedin || $instagram)) {
            ?>
            <div class="right_top_header">
              <?php if($header_button_text && $header_button_url) { ?>
              <div class="btn_enquiry">
                    <a href="<?php echo $header_button_url; ?>" title="<?php echo $header_button_text; ?>"><span><?php echo $header_button_text; ?></span></a>
                </div>
              <?php } if($instagram || $instagram || $instagram) { ?>
              <div class="header_social">
                  <ul>
                    <?php if($facebook) { ?>
                        <li><a href="<?php echo $facebook; ?>"  target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <?php } if($linkedin) { ?>
                        <li><a href="<?php echo $linkedin; ?>" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li> 
                      <?php } if($instagram) { ?>
                        <li><a href="<?php echo $instagram; ?>" target="_blank" target="_blank"title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <?php   } ?>
                    </ul>
                </div>
              <?php  }   ?>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="bottom_header">
          <div class="container"> 
            <?php 
            $logo=get_field('demo_logo','option'); 
            if($logo) { 
            ?>
           <div class="logo"> <a href="<?php echo site_url(); ?>" title="<?php echo bloginfo('name'); ?>"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a></div>
         <?php } ?>
           <div class="header_right">
            <div class="header-navigation">
                <button class="navigation-toggle"> <span class="span-icon"></span> <span class="span-icon"></span> <span class="span-icon"></span> </button>
                <div class="navigation">
                    <?php wp_nav_menu(array('menu' => 'Header Menu','menu_class' => 'menu', 'container' => '','walker' => new My_Walker_Nav_Menu() ));  ?>
                </div>
                
            </div>
           </div>
          </div>
      </div>
    </div>
  </header>
  <!--header section ends--> 
 
