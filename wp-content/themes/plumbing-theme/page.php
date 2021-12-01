<?php
get_header(); 
global $post;
$post_slug = $post->post_name;
?>
<?php if(function_exists('demo_custom_innner_banner')) demo_custom_innner_banner(); ?>
 <!-- Contact Us section starts here-->
  <section id="inner-page" class="services_detail_page">
  	<div class="inner-page">
    	<div class="container">
			<?php
			
			if(have_rows('page_content')) { while(have_rows('page_content')) { the_row();
			
			$page_content_infor=get_sub_field('page_content_infor');
			if($page_content_infor) { 
			?>
        	<div class="service_desc">
			<?php echo $page_content_infor;  ?>
            </div>
			<?php } } } else { ?>
			<h3 class="text-center">Coming Soon...</h3>
			<?php } ?>
            
        </div>
        
    </div>
  </section>
  
  
  
<?php get_footer(); ?>