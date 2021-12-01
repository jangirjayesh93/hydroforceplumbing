<?php get_header(); ?>
<?php if(function_exists('demo_custom_innner_banner')) demo_custom_innner_banner(); ?>
<section class="services-section products wow zoomIn" data-wow-delay="0.1s">
<div class="container">
<div class="row ">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">  
<div class="row "> 
<?php 
if(have_posts()){ while (have_posts()) { the_post();

$serice_title= get_the_title();
$service_url= get_permalink();
$service_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
$no_image=site_url().'/wp-content/uploads/2021/03/noimage-1.jpg';
if ($service_image) {
$service_image_url = aq_resize($service_image[0], 413, 362, true, false, true);
}
else {
$service_image_url = aq_resize($no_image, 413, 362, true, false, true);
}
?>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
<div class="service-bx"><a href="<?php echo $service_url; ?>"><div class="service-bx-img"><img src="<?php echo $service_image_url[0]; ?>"></div> <span></span><p><?php echo $serice_title;?></p></a></div>
</div>
<?php } } else { ?>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<h3 class="text-center">Coming Soon</h3>
</div>
<?php } ?>
</div>
</div>
</div>
</div>
</section>

<?php get_footer(); ?>