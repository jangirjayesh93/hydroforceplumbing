<?php /* Template Name: Project Page Template*/ 

get_header();
if(function_exists('demo_custom_innner_banner')) demo_custom_innner_banner(); 
?>

<section id="inner-page" class="projects_page">
  	<div class="inner-page">
    	<div class="container">
        	<div class="gallery1_box_main"> 
            	<div class="row">
            		<?php
            		$project_gallery=get_field('gallery');
					if($project_gallery) {
					 foreach($project_gallery as $project_galleries) { 
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
                    <?php } } else { ?>

                	<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                		<h3 class="text-center">Coming Soon...</h3>
                	</div>
                    <?php } ?>
                   
                </div>
            </div> 
        </div>
    </div>
  </section>

<?php get_footer(); ?>