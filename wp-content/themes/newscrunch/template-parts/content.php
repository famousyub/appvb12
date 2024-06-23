<?php
/**
 * Template part for displaying content
 *
 * @package Newscrunch Theme
 */
?>
<article data-wow-delay=".8s" itemscope itemtype="https://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class('spnc-grid-catpost spnc-post wow-callback zoomIn '); ?> >
	<div class="spnc-post-wrap">
	<div class="spnc-post-overlay"></div>
    <?php
	if(has_post_thumbnail()): ?>
		<!-- Post Featured Image -->
		<figure class="spnc-post-thumbnail">
			<a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('full', array('class'=>'img-fluid', 'itemprop'=>'image' )); ?>
			</a>				
		</figure>
	<?php endif; ?>

	<div class="spnc-post-content <?php if(!has_post_thumbnail()): ?>featured-img<?php endif; ?>">
		<div class="spnc-content-wrapper">
            <div class="spnc-post-wrapper">
            	<header class="spnc-entry-header">
                    <div class="spnc-entry-meta">
                        <!-- Post Author -->
			 			<?php if ( get_theme_mod('newscrunch_enable_post_author',true) == true ) :?>
							<span itemprop="author" class="spnc-author">
							<i class="fas fa-solid fa-user"></i>
								<a <?php if (is_rtl()) { echo 'dir="rtl"';} ?> itemprop="url" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" title="<?php echo esc_attr__('Posts by','newscrunch') . ' ' . esc_attr(get_the_author()); ?>">
				                <?php echo esc_html(get_the_author()); ?></a>
				            </span>				            
						<?php endif; ?>

						<!-- Post Tag -->
						<?php
			        	if(get_theme_mod('newscrunch_enable_post_tag',true)==true): 
			        		if(has_tag()): ?>
							<span class="tag-links"><i class="fa fa-tags"></i>
							 	 <?php echo the_tags('',', '); ?>
						 	</span>
					 	<?php	
						 	endif;
						endif; ?>	

						<!-- Post Comments -->
	                    <?php if(get_theme_mod('newscrunch_enable_post_comment',true)==true):?>
							<span class="comment-links"><i class="fas fa-comment-alt"></i>
								<a <?php if (is_rtl()) { echo 'dir="rtl"';} ?> itemprop="url" href="<?php the_permalink(); ?>#respond" title="<?php esc_attr_e('Number of Comments','newscrunch'); ?>"><?php echo esc_html(get_comments_number()) . ' ' . esc_html__('Comments','newscrunch'); ?></a>
					     	</span>
				     	<?php endif;

				     	// Read Time
						if ( class_exists('Newscrunch_Plus') ):
                            if(get_theme_mod('reading_time_enable',false) === true): ?>
                                <span class="spnc-read-time"><i class="fa fa-eye"></i> <?php spncp_reading_time();?></span>
                       	<?php endif; endif;?>
                    </div>
                    <h3 itemprop="name" class="spnc-entry-title">
                        <a itemprop="url" href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title();?></a>
                    </h3>
                </header>
                <div class="spnc-entry-content">
                    <div class="spnc-footer-meta">
                        <div class="spnc-entry-meta">
                        	<!-- Post Date -->
				    		<?php
							if ( get_theme_mod('newscrunch_enable_post_date',true) == true ) :?>
					            <span class="spnc-date">	
					            	<i class="fas fa-solid fa-clock"></i>
									<?php echo newcrunch_post_date_time(get_the_ID()); ?>
								</span>
							<?php endif; ?>               
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
</article>