<?php get_header(); ?>

<div class="row-fluid">
    <div class="span8 blog-details">
        
    
    <article>
    
    <?php if ( have_posts() ): while ( have_posts() ) : the_post();?>
   
    
        
    <!-- Blog title -->
        		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                
                	<p><em><?php the_time('l, F jS, Y'); ?></em></p>
           
    <small>Posted by <a href="<?php the_permalink(); ?>"><?php the_author_link(); ?></a></small>
        <!-- Blog image -->
        <a href="<?php the_permalink(); ?>"></a>
            <?php the_content()	; ?>
           
        
        <?php if(!($wp_query->post_count == $wp_query->current_post+1)) : ?>
        <hr />
        <?php endif; ?>
        
        <?php endwhile; else: ?>
		<p><?php _e('Sorry, tfhere are no posts.'); ?></p>
	<?php endif; ?>
	
</article>
  </div>
  
  <div class="span4 blog-list-right">
  <ul id="sidebar">
  	<?php dynamic_sidebar( 'right-sidebar' ); ?>
  </ul>
	<?php get_sidebar(); ?>	
  </div>
</div>



<?php get_footer(); ?>