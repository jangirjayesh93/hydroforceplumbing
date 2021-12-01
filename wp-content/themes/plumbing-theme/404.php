<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<?php if(function_exists('demo_custom_innner_banner')) demo_custom_innner_banner(); ?>
<section id="inner-page">
<div class="inner-page">
<div class="container">
<div class="text-center">
<h2>404</h2>
<h3>Looking for something?</h3>
<p>We are sorry. The Web address you entered is not a functioning page on our site</p>
<p>Go to <a href="<?php echo esc_url(home_url('/')); ?>" title="Home Page">Home Page</a></p>
</div>
</div>
</div>
</section>

<?php
get_footer();
?>