<?php
/*
  Template Name: Full Width
 */

get_header();
?>

<div id="main">
    
    <div class="container-fluid">
        
        <div class="row">
            
            <?php
// Start the Loop.
            while (have_posts()) : the_post();

                // Include the page content template.
                get_template_part('content', ( post_type_supports(get_post_type(), 'post-formats') ? get_post_format() : get_post_type()));

                if (!is_home() && !is_front_page()) {

                    get_sidebar('after-singular'); // Loads the sidebar-after-singular.php template.  

                    do_atomic('after_singular'); // after_singular  

                    comments_template('/comments.php', true); // Loads the comments.php template.  
                } else {

                    get_sidebar('portfolio'); // Loads the sidebar-portfolio.php template.

                    do_atomic('portfolio'); // portfolio

                    get_sidebar('portfolio-full'); // Loads the sidebar-portfolio-full.php template.  

                    do_atomic('portfolio_full'); // portfolio-full
                }
            endwhile;
            ?>
        </div>
        
    </div>
    
    <div id="blog-wrapper">
    
        <div class="container">
        
        <div class="row">
            
            <?php
            
                dynamic_sidebar('blog');
                
            ?>
            
        </div>
        
    </div>
    
    </div>
    
    <div id="clients-wrapper">
        
        <div class="row">
            
            <?php
            
                dynamic_sidebar('clients');
                
            ?>
            
        </div>
        
    </div>
    
</div>

<?php get_footer(); ?>