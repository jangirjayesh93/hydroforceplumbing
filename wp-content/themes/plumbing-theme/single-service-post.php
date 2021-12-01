<?php
$main_id = get_the_ID();
get_header(); 
global $post;
$post_slug = $post->post_name;
if(function_exists('demo_custom_innner_banner')) demo_custom_innner_banner();
?>


<section id="inner-page" class="services_detail_page">
    <div class="inner-page">
        <div class="container">
           <?php
            
            if(have_rows('content_box_list')) { while(have_rows('content_box_list')) { the_row();
            
            $post_content=get_sub_field('post_content');
            if($post_content) { 
            ?>
            <div class="service_desc">
            <?php echo $post_content;  ?>
            </div>
            <?php } } } else { ?>
            <h3 class="text-center">Coming Soon...</h3>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>