<?php
$main_id = get_the_ID();
get_header(); 
global $post;
$post_slug = $post->post_name;
if(function_exists('demo_custom_innner_banner')) demo_custom_innner_banner();
?>
<section id="inner-page">
<div class="inner-page">
<div class="container">
<div class="row "> 
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
<?php
if ( have_posts() ) { while ( have_posts() ) {
the_post();
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
if(get_the_content()){	
if($featured_img_url) { 
?>
<img src="<?php echo $featured_img_url; ?>" alt="" class="alignright">
<?php 
}
the_content();  }
else {  echo '<h3 class="text-center">Coming Soon</h3>'; }
} wp_reset_postdata();
}  
?>
</div>     
</div>
</div>
</div>
</section>
<?php get_footer(); ?>