<?php
/**
 * Template part for displaying posts
 *
 * @package Newscrunch Theme
 */
?>
<div data-wow-delay=".8s" class="wow-callback zoomIn spnc-first-catpost">
	<article  itemscope itemtype="https://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class('spnc-post '); ?> >
	    <div class="spnc-post-overlay"></div>
	    <div class="spnc-post-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>);" width="1920" height="865">
	    	<div class="alt-text"><?php the_title();?></div>
	        <div class="spnc-post-content">
	            <div class="spnc-content-wrapper">
	                <div class="spnc-post-wrapper">
	                    <header class="spnc-entry-header">
	                        <div class="spnc-entry-meta">
	                            <?php if ( has_category() ) :
								echo '<span itemprop="about" class="spnc-cat-links">';
									newscrunch_get_categories(get_the_ID());
								echo '</span>';
								endif; ?>
						 	</div>
	                        <h3 itemprop="name" class="spnc-entry-title">
		                        <a itemprop="url" href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title();?></a>
		                    </h3>
	                    </header>
	                       
	                    <div class="spnc-entry-content">
	                        <div class="spnc-footer-meta">
	                            <div class="spnc-entry-meta">
		                            <?php if ( get_theme_mod('newscrunch_enable_post_author',true) == true ) :?>
									<span itemprop="author" class="spnc-author">
										<i class="fas fa-solid fa-user"></i>
											<a <?php if (is_rtl()) { echo 'dir="rtl"';} ?> itemprop="url" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" title="<?php echo esc_attr__('Posts by','newscrunch') . ' ' . esc_attr(get_the_author()); ?>">
								                <?php echo esc_html(get_the_author()); ?></a>
						            </span>				            
									<?php endif; ?>

		                            <?php
									if ( get_theme_mod('newscrunch_enable_post_date',true) == true ) :?>
						            <span class="spnc-date">	
						            	<i class="fas fa-solid fa-clock"></i>
											<?php echo newcrunch_post_date_time(get_the_ID()); ?>
									</span>
									<?php endif; ?> 
										    
		                            <!-- Post Tag -->
									<?php
						        	if(get_theme_mod('newscrunch_enable_post_tag',true)==true):
										if(has_tag()):
											echo '<span class="spnc-tag-links"><i class="fa fa-tags"></i>';
										 	the_tags('',', ');
											 	echo'</span>';	
									 	endif;
									endif; 

									// Read Time
									if ( class_exists('Newscrunch_Plus') ):
                                        if(get_theme_mod('reading_time_enable',false) === true): ?>
                                            <span class="spnc-read-time"><i class="fa fa-eye"></i> <?php spncp_reading_time();?></span>
                                   	<?php endif; endif; ?> 
	                            </div>
	                            <p itemprop="description" class="spnc-description"><?php newscrunch_excerpt(15); ?></p>
	                            <a itemprop="url" href="<?php echo esc_url(get_the_permalink());?>" class="spnc-more-link" title="<?php esc_attr_e('Read More','newscrunch'); ?>"><?php esc_html_e('Read More','newscrunch');?></a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</article>   
</div>