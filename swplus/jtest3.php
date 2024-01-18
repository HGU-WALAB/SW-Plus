<?php
if ( !isset($wp_did_header) ) {
	$wp_did_header = true;

	// Load the WordPress library.
	require_once( dirname(__FILE__) . '/../wp-load.php' );


// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'category_name' =>'pds', 'post_status'=>'publish', 'posts_per_page'=>10)); ?>
<?php if ( $wpb_all_query->have_posts() ) : ?>

<ul>

    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    <!-- end of the loop -->

</ul>

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php }?>
