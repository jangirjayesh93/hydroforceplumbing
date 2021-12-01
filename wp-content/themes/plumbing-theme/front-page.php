<?php get_header();
$phone=get_field('demo_phone_number','option');
$iphone = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
$blackberry = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'], "iPad");
$banner_args = array('posts_per_page' => -1,'post_type' => 'banner-post','post_status' => 'publish','order'=>'ASC');
$banner_query = new WP_Query($banner_args);
$count=1;	
if ($banner_query) {
?>

 <!-- Banner section starts here-->
  <section class="banner">
      <ul id="slider1">
         <?php 
while ($banner_query->have_posts()) { $banner_query->the_post(); 
$title= get_the_title();
$demo_banner_main_title  = get_field('demo_banner_main_title');
$banner_content_information=get_field('banner_content_information');
$banner_button_text  = get_field('banner_button_text');
$banner_button_url  = get_field('banner_button_url');
$banner_button_text_two  = get_field('banner_button_text_two');
$banner_button_url_two  = get_field('banner_button_url_two');
$enable_option  = get_field('demo_status');
$get_field_new      = (get_field('demo_status')) ? 'active' : '';
if ($enable_option) {
$destop_banner_url = get_field('demo_banner_image');
}
if ($iphone || $android || $ipod || $blackberry || $ipad) {
$banner_filter = $destop_banner_url['url'];
$banner_url = $banner_filter;
}
if (!($iphone || $android || $ipod || $blackberry || $ipad)) {
$dest_banner_filter = $destop_banner_url['url'];
$banner_url = $dest_banner_filter;
}
if($get_field_new) { ?>
        <li> <img src="<?php echo $banner_url; ?>" alt="<?php echo $destop_banner_url['alt'];?>" title="<?php echo $destop_banner_url['title'];?>">
          <div class="bx-caption">
            <div class="container">
              <div class="text-cnt">
                <?php if($demo_banner_main_title) { ?>
                <span class="h2"><?php echo $demo_banner_main_title; ?></span>
              <?php } if($banner_content_information) { ?>
                <p><?php echo $banner_content_information; ?></p> 
              <?php } ?>
                <?php if($banner_button_text_two && $banner_button_url_two) { ?> 
                <a href="<?php echo $banner_button_url_two; ?>" title="<?php echo $banner_button_text_two; ?>" class="without_bg_btn"><?php echo $banner_button_text_two; ?></a> 
                <?php } if($banner_button_text && $banner_button_url) { ?> 
                <a href="<?php echo $banner_button_url; ?>" title="<?php echo $banner_button_text; ?>"><?php echo $banner_button_text; ?></a> 
              <?php } ?>
              </div>
            </div>          
          </div>       
        </li>
         <?php } $count++; } wp_reset_postdata(); ?>
      </ul>
  </section>
  <!-- Banner section ends here-->
<?php } ?> 
  <!-- Welcome section starts here-->


  <?php if(get_the_content()) {
  $about_main_title=get_field('about_main_title');
  $about_button_text=get_field('about_button_text');
  $about_button_url=get_field('about_button_url');
  $about_image=get_field('about_image');
  ?>
  <section id="hl_welcome">
    <div class="hl_welcome">
      <div class="container">
          <div class="row">
            <?php if($about_image) { ?>
              <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                  <div class="hl_welcome_img">
                      <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>">
                    </div>
                </div>
              <?php } ?>
                <div class="<?php if($about_image) { echo "col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"; } else { echo "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"; } ?>">
                  <div class="hl_welcome_txt">
                        <?php if($about_main_title) { ?>
                        <h1><?php echo $about_main_title; ?></h1>
                      <?php } ?>
                        <?php the_content(); ?>
                        <?php if($about_button_text && $about_button_url) { ?>
                        <a href="<?php echo $about_button_url; ?>" title="<?php echo $about_button_text; ?>" class="btn_read_more"><?php echo $about_button_text; ?></a>
                      <?php } ?>
                    </div>
                </div>
          </div>
        </div>
    </div>
  </section>
<?php } ?>
  <!-- Welcome section ends here-->
  
  <!-- Services section starts here-->
<?php 
$service_main_title=get_field('service_main_title');
$service_sub_text=get_field('service_sub_text');
$service_list=get_field('service_list');
if($service_list) { 
?>
  <section id="hl_services">
    <div class="hl_services">
      <div class="container">
          <div class="center_title">
              <span class="h2">Our Services</span>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br> when an unknown printer took a galley.</p>
            </div>
          <div class="row">
            <?php foreach($service_list as $service_lists) { 

              $service_list_title=$service_lists['service_list_title'];
              $service_list_icon=$service_lists['service_list_icon'];
              $service_list_hover_icon=$service_lists['service_list_hover_icon'];
              $service_list_content=$service_lists['service_list_content'];
              $service_list_url=$service_lists['service_list_url'];
              if($service_list_title && $service_list_hover_icon && $service_list_icon) {
              ?>
              <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                  <div class="hl_service_box">
                      <a href="<?php if($service_list_url) {  echo $service_list_url; } else{ echo "javascript:void(0);"; } ?>" title="<?php echo $service_list_title; ?>">
                            <div class="hl_services_icon">
                                <img src="<?php echo $service_list_icon['url']; ?>" class="normal_icon" alt="<?php echo $service_list_icon['alt']; ?>">
                                <img src="<?php echo $service_list_hover_icon['url']; ?>" class="hover_icon" alt="<?php echo $service_list_hover_icon['alt']; ?>">
                            </div>
                            <span class="h3"><?php echo $service_list_title; ?></span>
                            <?php if($service_list_content) { ?>
                            <p><?php echo $service_list_content; ?></p>
                          <?php } ?>
                        </a>
                    </div>
                </div>
              <?php } } ?>
            </div>
        </div>
    </div>
  </section>
<?php } ?>
  <!-- Welcome section ends here-->
  
  
  <!-- Why Choose Us section starts here-->

<?php 
$why_choose_background_image=get_field('why_choose_background_image');

$why_choose_main_title=get_field('why_choose_main_title');

$why_choose_list=get_field('why_choose_list');
if($why_choose_list) { 
?>
  <section id="hl_why_choose_us">   
    <div class="hl_why_choose_us" style="background:url(<?php if($why_choose_background_image) { echo $why_choose_background_image['url']; } else { echo get_template_directory_uri().'assets/images/why_choose_bg_banner.jpg'; } ?>) center center / cover;">
      <div class="container">
        <?php if($why_choose_main_title)  {  ?>
          <div class="center_title">
              <span class="h2"><?php echo $why_choose_main_title; ?></span> 
            </div>
          <?php } ?>
          <div class="row">
            <?php foreach($why_choose_list as $why_choose_lists) { 
              $why_choose_list_icon=$why_choose_lists['why_choose_list_icon'];
              $why_choose_title=$why_choose_lists['why_choose_title'];
              $why_choose_sub_text=$why_choose_lists['why_choose_sub_text'];
              if($why_choose_list_icon && $why_choose_title && $why_choose_sub_text) {
            ?>
              <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                  <div class="hl_why_choose_us_box">
                      <div class="icon_box">
                          <img src="<?php echo  $why_choose_list_icon['url']; ?>" alt="<?php echo  $why_choose_list_icon['alt']; ?>"> 
                        </div>
                        <span class="h3"><?php echo $why_choose_title; ?></span>
                        <p><?php echo $why_choose_sub_text; ?></p>
                    </div>
                </div>
              <?php } } ?>
                
            </div>
        </div>
    </div>
  </section>
<?php } ?>
  <!-- Why Choose Us section ends here-->
  
  
  <!-- Testimonials section starts here-->

<?php 
$testimonial_main_title=get_field('testimonial_main_title');
$testimonial_sub_title=get_field('testimonial_sub_title');
 $test_args = array('posts_per_page' => '-1','post_parent' => 0,'post_type' => 'testimonial-post','post_status' => 'publish','order'=>'ASC');
  $test_query = new WP_Query($test_args);
  if ($test_query) {
?>
  <section id="hl_testimonials">    
    <div class="hl_testimonials">
      <div class="container">
        <?php if($testimonial_main_title || $testimonial_sub_title) { ?>
          <div class="center_title">
          <?php if($testimonial_main_title) { ?>  
              <span class="h2"><?php echo $testimonial_main_title; ?></span>
              <?php } if($testimonial_sub_title) { ?>
                <p><?php echo $testimonial_sub_title; ?></p>
              <?php } ?>
            </div>
          <?php  }  ?>
          <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="hl_testimonials_box">
                      
                      <div class="hl_testimonials_carousel">
                        <?php 
                          while ($test_query->have_posts()) { $test_query->the_post();
                          $test_title= get_the_title();
                          $testimonial_icon=get_field('testimonial_icon');
                          $testimonial_designation=get_field('testimonial_designation');
                          ?>
                          <div class="item">
                              <div class="hl_testimonials_txt">
                                  <div class="client_details">
                                      <img src="<?php if($testimonial_icon) { echo $testimonial_icon['url']; } else { echo get_template_directory_uri().'/assets/images/testimonials_img.png'; } ?>" alt="<?php echo $testimonial_icon['alt']; ?>">
                                        <span class="h3"><?php echo $test_title; ?></span>
                                        <?php if($testimonial_designation) { ?>
                                        <span class="designation"><?php echo $testimonial_designation; ?></span>
                                      <?php } ?>
                                    </div>
                                  <?php the_content(); ?>
                                </div>
                            </div>
                         <?php } wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
<?php } ?>
  <!-- Testimonials section ends here-->
  
  
  
  <!-- Projects section starts here-->
<?php 
$our_project_main_title=get_field('our_project_main_title');
$our_project_sub_title=get_field('our_project_sub_title');
$project_gallery=get_field('project_gallery');
if($project_gallery) {
?>
  <section id="hl_projects">    
    <div class="hl_projects gallery1_box_main">
      <div class="container">
        <?php if($our_project_main_title || $our_project_sub_title) { ?>
          <div class="center_title">  
            <?php  if($our_project_main_title)  { ?>
              <span class="h2"><?php echo $our_project_main_title; ?></span>
              <?php } if($our_project_sub_title)  {  ?>
                <p><?php echo $our_project_sub_title; ?></p>
              <?php } ?>
            </div>
          <?php } ?>
          <div class="row">
            <?php foreach($project_gallery as $project_galleries) { 
               $project_galleries_src = aq_resize($project_galleries['url'], 370, 250, true, false, true);
                 $project_galleries_link   = $project_galleries_src;
              ?>
              <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                   <a href="<?php echo $project_galleries['url']; ?>" data-fancybox="group" class="gallery_img_box" title="<?php echo $project_galleries['title']; ?>">
                      <div class="gallery_hvr"> 
                        <img alt="<?php echo $project_galleries_link[0]; ?>" src="<?php echo $project_galleries['url']; ?>">
                        <div class="gallery_name"> <span><i class="fas fa-eye"></i></span> </div>
                      </div>
                     </a> 
                </div>
              <?php } ?>
            </div>
        </div>
    </div>
  </section>
  <!-- Projects section ends here-->
 <?php } ?> 
<?php get_footer(); ?>