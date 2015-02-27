<?php get_header(); ?>

<div class="row-fluid">
    <div class="span8 blog-details">
    
    
    <article>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    		    		<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    		                            
    		            	<p><em><?php the_time('l, F jS, Y'); ?></em></p>
    		       
    		<small>Posted by <a href="<?php the_permalink(); ?>"><?php the_author_link(); ?></a></small>    
    	  	
    	  	<?php the_content(); ?>    	  		
    	  	
    		<?php comments_template(); ?>
    
    	<?php endwhile; else: ?>
    		<p><?php _e('Sorry, this page does not exist.'); ?></p>
    	<?php endif; ?>
  </div>
  </article>
  <div class="span4 blog-list-right">
  
	<?php get_sidebar(); ?>	
  </div>
</div>


    

<?php get_footer(); ?>